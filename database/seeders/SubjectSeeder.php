<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            "Arabic",
            "Art",
            "Biology",
            "Chemistry",
            "Computer Science",
            "Economics",
            "English",
            "French",
            "Geography",
            "History",
            "Mathematics",
            "Music",
            "Philosophy",
            "Physical Education",
            "Physics",
            "Science",
            "Sociology",
        ];
        foreach($subjects as $subject) {
            Subject::firstOrCreate(['subject' => $subject]);
        }
    }
}
