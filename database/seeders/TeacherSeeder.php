<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Section;
use App\Models\Session;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Term;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
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
        $teachers = User::where('role', 'teacher')->get();
        foreach ($teachers as $teacher) {
            $std= Teacher::create([
                'user_id' => $teacher->id,
                'dob' => fake()->dateTimeBetween('-21yrs', '-50yrs'),
                'gender' => fake()->randomElement($gender),
                'employee_id' => fake()->bothify('TCH-##??')
            ]);

           
            //create teacher classroom and subject
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
