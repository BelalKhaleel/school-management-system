<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'department' => 'Scientific',
                'code' => 'S',
            ],
            [
                'department' => 'Economics and Society',
                'code' => 'SE',
            ],
            [
                'department' => 'Life & Earth Sciences',
                'code' => 'LS',
            ],
            [
                'department' => 'Literature',
                'code' => 'L',
            ],
            [
                'department' => 'General Sciences',
                'code' => 'GS',
            ],
            [
                'department' => 'Humanities',
                'code' => 'H',
            ],
            [
                'department' => 'Not specified',
                'code' => 'NS',
            ],
        ];

        foreach($departments as $department) {
            Department::updateOrCreate([
                'department' => $department['department'],
                'code' => $department['code'],
            ]);
        }

        $non_specific_department_id = Department::where('department', 'Not specified')->value('id');
        $scientific_id = Department::where('department', 'Scientific')->value('id');
        $socio_economics_id = Department::where('department', 'Economics and Society')->value('id');
        $literature_id = Department::where('department', 'Literature')->value('id');
        $general_sciences_id = Department::where('department', 'General Sciences')->value('id');
        $life_sciences_id = Department::where('department', 'Life & Earth Sciences')->value('id');
        $humanities_id = Department::where('department', 'Humanities')->value('id');

        $EB_ids = Certificate::where('certificate', 'LIKE', 'EB%')->pluck('id');
        $brevet_id = Certificate::where('certificate', 'Brevet')->value('id');
        $seconde_id = Certificate::where('certificate', 'Seconde')->value('id');
        $baccalaureate_1_id = Certificate::where('certificate', 'Baccalaureate 1')->value('id');
        $baccalaureate_2_id = Certificate::where('certificate', 'Baccalaureate 2')->value('id');

        $EB_array = $EB_ids->map(function ($EB_id) use ($non_specific_department_id) {
            return [
                'certificate_id' => $EB_id,
                'department_id' => $non_specific_department_id,
            ];
        })->toArray();

        $other_certificate_department_array = [
            [
                'certificate_id' => $brevet_id,
                'department_id' => $non_specific_department_id,
            ],
            [
                'certificate_id' => $seconde_id,
                'department_id' => $scientific_id,
            ],
            [
                'certificate_id' => $seconde_id,
                'department_id' => $literature_id,
            ],
            [
                'certificate_id' => $baccalaureate_1_id,
                'department_id' => $scientific_id,
            ],
            [
                'certificate_id' => $baccalaureate_1_id,
                'department_id' => $socio_economics_id,
            ],
            [
                'certificate_id' => $baccalaureate_1_id,
                'department_id' => $literature_id,
            ],
            [
                'certificate_id' => $baccalaureate_2_id,
                'department_id' => $general_sciences_id,
            ],
            [
                'certificate_id' => $baccalaureate_2_id,
                'department_id' => $life_sciences_id,
            ],
            [
                'certificate_id' => $baccalaureate_2_id,
                'department_id' => $socio_economics_id,
            ],
            [
                'certificate_id' => $baccalaureate_2_id,
                'department_id' => $humanities_id,
            ],
        ];

        $data = array_merge($EB_array, $other_certificate_department_array);
        
        DB::table('certificate_department')->truncate();
        DB::table('certificate_department')->insert($data);
    }
}
