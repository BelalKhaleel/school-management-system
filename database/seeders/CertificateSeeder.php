<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $certificates = [
            'EB1',
            'EB2',
            'EB3',
            'EB4',
            'EB5',
            'EB6',
            'EB7',
            'EB8',
            'Brevet',
            'Seconde',
            'Baccalaureate 1',
            'Baccalaureate 2',
        ];

        foreach ($certificates as $certificate) {
            Certificate::firstOrCreate(['certificate' => $certificate]);
        }
    }
}
