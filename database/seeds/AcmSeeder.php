<?php

use App\Acm;
use Illuminate\Database\Seeder;

class AcmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acms = [
            // 1
            [
                'number' => '1',
                'label' => 'grado academico',
                'assessment' => 30,
                'parent_id' => 0,
            ],

            [
                'number' => '1.1',
                'label' => 'grado licenciatura',
                'assessment' => 14,
                'parent_id' => 1,
            ],
            [
                'number' => '1.1.1',
                'label' => 'lic en el area del departamento',
                'assessment' => 10,
                'parent_id' => 2,
            ],
            [
                'number' => '1.1.2',
                'label' => 'lic en otras areas',
                'assessment' => 4,
                'parent_id' => 2,
            ],
            //

            [
                'number' => '1.2',
                'label' => 'titulos postgrado',
                'assessment' => 48,
                'parent_id' => 1,
            ],
            [
                'number' => '1.2.1',
                'label' => 'diplopamo en docencia',
                'assessment' => 3,
                'parent_id' => 5,
            ],
            [
                'number' => '1.2.2',
                'label' => 'diplomado en el area de la mateira',
                'assessment' => 3,
                'parent_id' => 5,
            ],
            //
            [
                'number' => '1.3',
                'label' => 'perfeccionamiento',
                'assessment' => 2.78,
                'parent_id' => 1,
            ],
            [
                'number' => '1.3.1',
                'label' => 'cursos en el area de la materia',
                'assessment' => 0.25,
                'parent_id' => 8,
            ],
            [
                'number' => '1.3.2',
                'label' => 'educacion universitaria',
                'assessment' => 0.35,
                'parent_id' => 8,
            ],

        ];
        foreach ($acms as $a) {
            Acm::create([
                'number' => $a['number'],
                'label' => $a['label'],
                'assessment' => $a['assessment'],
                'assessment' => $a['assessment'],
                'parent_id' => $a['parent_id'],
            ]);
        }
    }
}
