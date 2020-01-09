<?php

use App\File;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $files = [
            // 1
            [
                'path' => 'url de la imagen',
                'acm_id' => 3,
            ],

            [
                'path' => 'url de la iamgen',
                'acm_id' => 3,
            ],
            [
                'path' => 'url de la iamgen',
                'acm_id' => 3,
            ],

            [
                'path' => 'url de la iamgen',
                'acm_id' => 4,
            ],
            [
                'path' => 'url de la iamgen',
                'acm_id' => 4,
            ],
            [
                'path' => 'url de la iamgen',
                'acm_id' => 6,
            ],
            [
                'path' => 'url de la iamgen',
                'acm_id' => 6,
            ],
        ];
        foreach ($files as $a) {
            File::create([
                'path' => $a['path'],
                'acm_id' => $a['acm_id'],
            ]);
        }
    }
}
