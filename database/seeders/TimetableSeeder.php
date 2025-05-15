<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use App\Models\Session;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Term;
use App\Models\Timetable;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
        $timeSlots = ['08:00', '09:00', '10:00', '11:00', '12:00'];

        $classrooms = Classroom::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();
        $session = Session::first();
        $term = Term::first();
        $school = School::first();

        foreach ($classrooms as $classroom) {
            foreach ($days as $day) {
                foreach ($timeSlots as $time) {
                    Timetable::create([
                        'school_id' => $school->id,
                        'classroom_id' => $classroom->id,
                        'subject_id' => $subjects->random()->id,
                        'teacher_id' => $teachers->random()->id,
                        'day_of_week' => $day,
                        'start_time' => $time,
                        'end_time' => Carbon::parse($time)->addHour()->format('H:i'),
                        'session_id' => $session->id,
                        'term_id' => $term->id,
                    ]);
                }
            }
        }
    }
}
