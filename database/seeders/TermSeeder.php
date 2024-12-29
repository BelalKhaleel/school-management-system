<?php

namespace Database\Seeders;

use App\Models\Term;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terms = [
            [
                'term' => 'First Semester',
                'start_date' => Carbon::createFromFormat('d-m-Y', '18-9-' . date('Y'))->toDateString(),
                'end_date' => Carbon::createFromFormat('d-m-Y', '21-11-' . (date('Y') + 1))->toDateString(),

            ],
            [
                'term' => 'Second Semester',
                'start_date' => Carbon::createFromFormat('d-m-Y', '22-2-' . date('Y'))->toDateString(),
                'end_date' => Carbon::createFromFormat('d-m-Y', '21-4-' . (date('Y') + 1))->toDateString(),
            ],
            [
                'term' => 'Third Semester',
                'start_date' => Carbon::createFromFormat('d-m-Y', '23-4-' . date('Y'))->toDateString(),
                'end_date' => Carbon::createFromFormat('d-m-Y', '10-6-' . (date('Y') + 1))->toDateString(),
            ],
        ];

        foreach($terms as $term) {
            Term::firstOrCreate([
                'term' => $term['term'],
                'start_date' => $term['start_date'],
                'end_date' => $term['end_date'],
            ]);
        }
    }
}
