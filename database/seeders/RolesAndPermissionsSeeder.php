<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {       
        $permissions = [
            'add student',
            'edit student',
            'fetch student',
            'delete student',
            'add teacher',
            'edit teacher',
            'fetch teacher',
            'delete teacher',
            'add nationalities',
            'edit nationalities',
            'fetch nationalities',
            'delete nationalities',
            'add languages',
            'edit languages',
            'fetch languages',
            'delete languages',
            'add terms',
            'edit terms',
            'fetch terms',
            'delete terms',
            'add certificates',
            'edit certificates',
            'fetch certificates',
            'delete certificates',
            'add subjects',
            'edit subjects',
            'fetch subjects',
            'delete subjects',
            'add sections',
            'edit sections',
            'fetch sections',
            'delete sections',
            'add departments',
            'edit departments',
            'fetch departments',
            'delete departments',
            'add classrooms',
            'edit classrooms',
            'fetch classrooms',
            'delete classrooms',
            'add grades',
            'edit grades',
            'fetch grades',
            'delete grades',
        ];

        foreach($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission]);
        }
        $admin = Role::firstOrCreate(['name' => 'admin']);
        
        $admin->syncPermissions($permissions);

        $teacher = Role::create(['name' => 'teacher']);

        $teacher_permissions = [
            'fetch student',
            'fetch terms',
            'fetch certificates',
            'fetch subjects',
            'fetch sections',
            'fetch departments',
            'fetch classrooms',
            'add grades',
            'edit grades',
            'fetch grades',
            'delete grades',
        ];

        $teacher->syncPermissions($teacher_permissions);

        $student = Role::create(['name' => 'student']);

        $student_permissions = [
            'fetch terms',
            'fetch subjects',
            'fetch grades',
        ];

        $student->syncPermissions($student_permissions);
    }
}
