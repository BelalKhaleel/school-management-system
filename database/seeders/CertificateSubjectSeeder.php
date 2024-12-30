<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CertificateSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $elementary_school_ids = Certificate::whereIn('certificate', ['EB1', 'EB2', 'EB3', 'EB4', 'EB5', 'EB6'])->pluck('id');
        $middle_school_ids = Certificate::whereIn('certificate', ['EB7', 'EB8', 'Brevet'])->pluck('id');
        $high_school_ids = Certificate::whereIn('certificate', ['Seconde', 'Baccalaureate 1', 'Baccalaureate 2'])->pluck('id');

        $elementary_school_subject_ids = Subject::whereIn('subject', ['Arabic', 'Art', 'Computer Science', 'French', 'Social Studies', 'Mathematics', 'Music', 'Physical Education', 'Science'])->pluck('id');
        $middle_school_subject_ids = Subject::whereIn('subject', ['Arabic', 'Biology', 'Chemistry', 'Computer Science', 'Geography', 'History', 'Mathematics', 'Physical Education', 'Physics'])->pluck('id');
        $high_school_subject_ids = Subject::whereIn('subject', ['Arabic', 'Biology', 'Chemistry', 'Computer Science', 'Economics', 'Geography', 'History', 'Mathematics', 'Philosophy', 'Physical Education', 'Physics', 'Sociology'])->pluck('id');

        $data = [];

        foreach ($elementary_school_ids as $certificate_id) {
            foreach ($elementary_school_subject_ids as $subject_id) {
                $data[] = [
                    'certificate_id' => $certificate_id,
                    'subject_id' => $subject_id,
                ];
            }
        }
        foreach ($middle_school_ids as $certificate_id) {
            foreach ($middle_school_subject_ids as $subject_id) {
                $data[] = [
                    'certificate_id' => $certificate_id,
                    'subject_id' => $subject_id,
                ];
            }
        }
        foreach ($high_school_ids as $certificate_id) {
            foreach ($high_school_subject_ids as $subject_id) {
                $data[] = [
                    'certificate_id' => $certificate_id,
                    'subject_id' => $subject_id,
                ];
            }
        }
        DB::table('certificate_subject')->truncate();
        DB::table('certificate_subject')->insert($data);
    }
}