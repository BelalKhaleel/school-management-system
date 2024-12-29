<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            'A',
            'B',
            'C',
        ];

        foreach($sections as $section) {
            Section::firstOrCreate(['section' => $section]);
        }
    }
}
