<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'first_name' => 'Belal',
            'last_name' => 'Khaleel',
            'email' => 'admin@school.com',
            'password' => bcrypt('@o1min'),
        ])->assignRole('admin');

        User::factory()
                ->count(20)
                ->create()
                ->each(function ($user) {
                    $user->assignRole('teacher');
                });

        User::factory()
                ->count(100)
                ->create()
                ->each(function ($user) {
                    $user->assignRole('student');
                });
    }
}
