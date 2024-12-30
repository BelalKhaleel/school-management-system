<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Database\Seeders\TermSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\GenderSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\StudentSeeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\DepartmentSeeder;
use Database\Seeders\CertificateSeeder;
use Database\Seeders\NationalitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenderSeeder::class,
            LanguageSeeder::class,
            NationalitySeeder::class,
            UserSeeder::class,
            CertificateSeeder::class,
            TermSeeder::class,
            DepartmentSeeder::class,
            SubjectSeeder::class,
            CertificateDepartmentSeeder::class,
            CertificateSubjectSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
        ]);   
    }
}
