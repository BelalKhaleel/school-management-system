<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 1,
                "department_id" => 7,
                "room_number" => "101EB1F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 1,
                "department_id" => 7,
                "room_number" => "102EB1F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 1,
                "department_id" => 7,
                "room_number" => "103EB1F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 1,
                "department_id" => 7,
                "room_number" => "104EB1E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 1,
                "department_id" => 7,
                "room_number" => "105EB1E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 1,
                "department_id" => 7,
                "room_number" => "106EB1E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 2,
                "department_id" => 7,
                "room_number" => "107EB2F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 2,
                "department_id" => 7,
                "room_number" => "108EB2F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 2,
                "department_id" => 7,
                "room_number" => "109EB2F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 2,
                "department_id" => 7,
                "room_number" => "110EB2E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 2,
                "department_id" => 7,
                "room_number" => "111EB2E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 2,
                "department_id" => 7,
                "room_number" => "112EB2E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 3,
                "department_id" => 7,
                "room_number" => "113EB3F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 3,
                "department_id" => 7,
                "room_number" => "114EB3F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 3,
                "department_id" => 7,
                "room_number" => "115EB3F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 3,
                "department_id" => 7,
                "room_number" => "116EB3E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 3,
                "department_id" => 7,
                "room_number" => "117EB3E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 3,
                "department_id" => 7,
                "room_number" => "118EB3E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 4,
                "department_id" => 7,
                "room_number" => "119EB4F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 4,
                "department_id" => 7,
                "room_number" => "120EB4F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 4,
                "department_id" => 7,
                "room_number" => "121EB4F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 4,
                "department_id" => 7,
                "room_number" => "122EB4E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 4,
                "department_id" => 7,
                "room_number" => "123EB4E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 4,
                "department_id" => 7,
                "room_number" => "124EB4E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 5,
                "department_id" => 7,
                "room_number" => "201EB5F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 5,
                "department_id" => 7,
                "room_number" => "202EB5F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 5,
                "department_id" => 7,
                "room_number" => "203EB5F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 5,
                "department_id" => 7,
                "room_number" => "204EB5E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 5,
                "department_id" => 7,
                "room_number" => "205EB5E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 5,
                "department_id" => 7,
                "room_number" => "206EB5E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 6,
                "department_id" => 7,
                "room_number" => "207EB6F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 6,
                "department_id" => 7,
                "room_number" => "208EB6F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 6,
                "department_id" => 7,
                "room_number" => "209EB6F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 6,
                "department_id" => 7,
                "room_number" => "210EB6E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 6,
                "department_id" => 7,
                "room_number" => "211EB6E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 6,
                "department_id" => 7,
                "room_number" => "212EB6E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],

            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 7,
                "department_id" => 7,
                "room_number" => "213EB7F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 7,
                "department_id" => 7,
                "room_number" => "214EB7F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 7,
                "department_id" => 7,
                "room_number" => "215EB7F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 7,
                "department_id" => 7,
                "room_number" => "216EB7E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 7,
                "department_id" => 7,
                "room_number" => "217EB7E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 7,
                "department_id" => 7,
                "room_number" => "218EB7E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],

            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 8,
                "department_id" => 7,
                "room_number" => "219EB8F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 8,
                "department_id" => 7,
                "room_number" => "220EB8F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 8,
                "department_id" => 7,
                "room_number" => "221EB8F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 8,
                "department_id" => 7,
                "room_number" => "222EB8E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 8,
                "department_id" => 7,
                "room_number" => "223EB8E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 8,
                "department_id" => 7,
                "room_number" => "224EB8E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],

            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 9,
                "department_id" => 7,
                "room_number" => "301EB9F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 9,
                "department_id" => 7,
                "room_number" => "302EB9F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 9,
                "department_id" => 7,
                "room_number" => "303EB9F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 9,
                "department_id" => 7,
                "room_number" => "304EB9E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 9,
                "department_id" => 7,
                "room_number" => "305EB9E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 9,
                "department_id" => 7,
                "room_number" => "306EB9E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 10,
                "department_id" => 1,
                "room_number" => "307EB10F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 10,
                "department_id" => 1,
                "room_number" => "308EB10F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 10,
                "department_id" => 1,
                "room_number" => "309EB10F",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 10,
                "department_id" => 1,
                "room_number" => "310EB10E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 10,
                "department_id" => 1,
                "room_number" => "311EB10E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 10,
                "department_id" => 1,
                "room_number" => "312EB10E",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],

            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 10,
                "department_id" => 4,
                "room_number" => "313EB11FS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 10,
                "department_id" => 4,
                "room_number" => "314EB11FS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 10,
                "department_id" => 4,
                "room_number" => "315EB11FS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 10,
                "department_id" => 4,
                "room_number" => "316EB11ES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 10,
                "department_id" => 4,
                "room_number" => "317EB11ES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 10,
                "department_id" => 4,
                "room_number" => "318EB11ES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 11,
                "department_id" => 1,
                "room_number" => "319EB11FL",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 11,
                "department_id" => 1,
                "room_number" => "320EB11FL",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 11,
                "department_id" => 1,
                "room_number" => "321EB11FL",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 11,
                "department_id" => 1,
                "room_number" => "322EB11EL",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 11,
                "department_id" => 1,
                "room_number" => "323EB11EL",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 11,
                "department_id" => 1,
                "room_number" => "324EB11EL",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 11,
                "department_id" => 2,
                "room_number" => "401EB12FLS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 11,
                "department_id" => 2,
                "room_number" => "402EB12FLS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 11,
                "department_id" => 2,
                "room_number" => "403EB12FLS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 11,
                "department_id" => 2,
                "room_number" => "404EB12ELS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 11,
                "department_id" => 2,
                "room_number" => "405EB12ELS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 11,
                "department_id" => 2,
                "room_number" => "406EB12ELS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 11,
                "department_id" => 4,
                "room_number" => "407EB12FGS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 11,
                "department_id" => 4,
                "room_number" => "408EB12FGS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 11,
                "department_id" => 4,
                "room_number" => "409EB12FGS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 11,
                "department_id" => 4,
                "room_number" => "410EB12EGS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 11,
                "department_id" => 4,
                "room_number" => "411EB12EGS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 11,
                "department_id" => 4,
                "room_number" => "412EB12EGS",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],

            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 12,
                "department_id" => 5,
                "room_number" => "413EB12FES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 12,
                "department_id" => 5,
                "room_number" => "414EB12FES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 12,
                "department_id" => 5,
                "room_number" => "415EB12FES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 12,
                "department_id" => 5,
                "room_number" => "416EB12EES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 12,
                "department_id" => 5,
                "room_number" => "417EB12EES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 12,
                "department_id" => 5,
                "room_number" => "418EB12EES",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],

            [
                "language_id" => 1,
                "section_id" => 1,
                "certificate_id" => 12,
                "department_id" => 3,
                "room_number" => "419EB12FEH",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 2,
                "certificate_id" => 12,
                "department_id" => 3,
                "room_number" => "420EB12FEH",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 1,
                "section_id" => 3,
                "certificate_id" => 12,
                "department_id" => 3,
                "room_number" => "421EB12FEH",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 1,
                "certificate_id" => 12,
                "department_id" => 3,
                "room_number" => "422EB12EEH",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 2,
                "certificate_id" => 12,
                "department_id" => 3,
                "room_number" => "423EB12EEH",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ],
            [
                "language_id" => 2,
                "section_id" => 3,
                "certificate_id" => 12,
                "department_id" => 3,
                "room_number" => "424EB12EEH",
                "number_of_students" => 0,
                "max_number_of_students" => 30,
                "school_year" => "2024 - 2025"
            ]
        ];

        foreach($classes as $class) {
            Classroom::updateOrCreate($class);
        }
    }
}
