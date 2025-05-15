<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use App\Models\Section;
use App\Models\Session;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gender = ['female', 'male'];
        $session = Session::first();
        $term = Term::first();
        $classroom = Classroom::all();
        $section = Section::all();
        $subject = Subject::all();
        $students = User::where('role', 'student')->get();
        foreach ($students as $student) {
            $std= Student::create([
                'user_id' => $student->id,
                'dob' => fake()->dateTimeBetween('-6yrs', '-10yrs'),
                'gender' => fake()->randomElement($gender),
                'student_code' => fake()->bothify('STD-##??')
            ]);

           
            //create student classroom and subject
            $std->classrooms()->attach($classroom->random()->id, [
                'section_id' => $section->random()->id, 
                'session_id' => $session->id, 
                'term_id' => $term->id
            ]);

            $std->subjects()->attach($subject->random()->id, [
                'session_id' => $session->id, 
                'term_id' => $term->id
            ]);
        }
    }
}
