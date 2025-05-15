<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\Grade;
use App\Models\Session;
use App\Models\Student;
use App\Models\Term;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assessments = Assessment::all();
        $students = Student::all();
        $session = Session::first();
        $term = Term::first();

        foreach ($assessments as $assessment) {
            foreach ($students as $student) {
                // Randomly decide whether the student took this assessment 
                if (rand(0, 1)) {
                    Grade::create([
                        'assessment_id' => $assessment->id,
                        'student_id' => $student->id,
                        'subject_id' => $student->subjects()->inRandomOrder()->first()->id,
                        'score' => rand(0, $assessment->total_score),
                        'session_id' => $session->id, 
                        'term_id' => $term->id,
                    ]);
                }
            }
        }
    }
}
