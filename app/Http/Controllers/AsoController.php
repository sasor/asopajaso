<?php


namespace App\Http\Controllers;

use App\Aso;
use App\AsoCommand;
use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class AsoController
{
    private $path_file;
    private $command;

    public function __construct()
    {
        $this->command = new AsoCommand();
        $this->path_file = storage_path('app/public') . '/vsftpd.conf';
    }

    public function preAso()
    {
        $aso = $this->getValuesFromFileConfig();
        return view('aso')->with('aso', $aso);
    }

    public function postAso(Request $request)
    {
        $anonymous = $request->anonymous;
        $local = $request->local;
        $write = $request->write;
        $chroot = $request->chroot;

        $vars = ['anonymous' => $anonymous, 'local' => $local, 'write' => $write, 'chroot' => $chroot];
        foreach ($vars as $var => $value) {
            switch ($var) {
                case 'anonymous':
                    $command = '4s';
                    $cmd = $this->buildCommand($command, $value);
                    $this->runCommand($command);
                    break;
                case 'local':
                    $command = '5s';
                    $cmd = $this->buildCommand($command, $value);
                    $this->runCommand($command);
                    break;
                case 'write':
                    $command = '6s';
                    $cmd = $this->buildCommand($command, $value);
                    $this->runCommand($command);
                    break;
                case 'chroot':
                    $command = '7s';
                    $cmd = $this->buildCommand($command, $value);
                    $this->runCommand($command);
                    break;
                default:
                    dd('NO PARAM SEE FORM');
            }
        }

        return redirect()->route('home');
    }

    public function start(Request $request)
    {
        $out = $this->startCommand();
        return redirect()->route('home');
    }

    public function stop(Request $request)
    {
        $out = $this->stopCommand();
        return redirect()->route('home');
    }

    public function restart(Request $request)
    {
        $out = $this->restartCommand();
        return redirect()->route('home');
    }

    public function runCommand($command_param)
    {
        $path = storage_path('app/public') . '/vsftpd.conf';
        $process = new Process(['sed', '-i', $command_param, $path]);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        } else {
            return true;
        }
    }

    public function buildCommand(&$command, $value)
    {
        if ($value == '1') {
            $command .= '/NO/YES/';
        } else {
            $command .= '/YES/NO/';
        }

        return $command;
    }

    public function restartCommand()
    {
        $process = new Process(['systemctl', 'restart', 'vsftpd.service']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        } else {
            return true;
        }
    }

    public function startCommand()
    {
        $process = new Process(['systemctl', 'start', 'vsftpd.service']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        } else {
            return true;
        }
    }

    public function stopCommand()
    {
        $process = new Process(['systemctl', 'stop', 'vsftpd.service']);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        } else {
            return true;
        }
    }

    public function badCommands()
    {

        //dump($anonymous, $local, $write, $chroot);

        //system('rm /var/www/html/test.html');
        //exec('rm /var/www/html/jazz.html');
        //passthru('rm /var/www/html/vale.html');

        //$process = new Process(['rm', '/var/www/html/ismael.html']);
        //$process->run();


        $sed = "sed -n '2p' vsftpd.conf | cut -d= -f2";
        $awk = "sed -n '2p' vsftpd.conf | awk -F\= '{print $2}'";
        $aw2 = "sed -n '2p' vsftpd.conf | awk -F'=' '{print $2}'";
    }

    public function getValuesFromFileConfig()
    {
        $aso = new Aso();
        $aso->anonymous = $this->command->anonymousValue();
        $aso->local = $this->command->localValue();
        $aso->write = $this->command->writeValue();
        $aso->chroot = $this->command->chrootValue();
        $aso->active = $this->command->serviceActive();
        return $aso;
    }
}
