<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
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
    }
}
