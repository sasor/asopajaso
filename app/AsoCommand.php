<?php


namespace App;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class AsoCommand
{
    private $path_file;

    public function __construct()
    {
        $this->path_file = storage_path('app/public') . '/vsftpd.conf';
    }

    //$sed = "sed -n '2p' vsftpd.conf | cut -d= -f2";
    //$awk = "sed -n '2p' vsftpd.conf | awk -F\= '{print $2}'";
    //$aw2 = "sed -n '2p' vsftpd.conf | awk -F'=' '{print $2}'";

    public function runCommand($command)
    {
        $s = "sed -n '{$command}' ". $this->path_file." | cut -d= -f2";

        return exec($s);
    }

    public function anonymousValue()
    {
//        $command = "sed -n \'4p\' ". $this->path_file ." | awk -F\= '{print $2}'";
        $command = '4p';
        return $this->runCommand($command);
    }

    public function localValue()
    {
        $command = '5p';
        return $this->runCommand($command);
    }

    public function writeValue()
    {
        $command = '6p';
        return $this->runCommand($command);
    }

    public function chrootValue()
    {
        $command = '7p';
        return $this->runCommand($command);
    }

    public function serviceActive()
    {
        return exec('systemctl is-active vsftpd >/dev/null 2>&1 && echo YES || echo NO');
    }
}
