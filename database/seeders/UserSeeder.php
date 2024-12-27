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
            'username' => 'admin',
            'email' => 'school_admin@school.com',
            'password' => bcrypt('@o1min'),
            'is_admin' => true,
        ]);
    }
}
