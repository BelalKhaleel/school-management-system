<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Database\Seeders\LanguageSeeder;

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
            StudentSeeder::class,
            TeacherSeeder::class,
        ]);
    }
}
