<?php

namespace Database\Seeders;

use App\Models\AttendanceRecord;
use App\Models\Session;
use App\Models\Term;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendanceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $session = Session::first();
        $term = Term::first();
        $students = User::where('role', 'student')->get();
        foreach ($students as $student) {
           AttendanceRecord::create([
                'student_id' => $student->id,
                'session_id' => $session->id, 
                'term_id' => $term->id,
                'date' => fake()->date(),
                'present' => fake()->boolean(),
            ]);
        }
    }
}
