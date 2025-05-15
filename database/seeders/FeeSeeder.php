<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Fee;
use App\Models\School;
use App\Models\Session;
use App\Models\Term;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $term = Term::first();
        $session = Session::first();
        $classrooms = Classroom::all();
        $school = School::first();

        foreach ($classrooms as $classroom) {
            Fee::create([
                'school_id' => $school->id,
                'classroom_id' => $classroom->id,
                'session_id' => $session->id,
                'term_id' => $term->id,
                'name' => fake()->word(),
                'amount' => rand(10000, 30000),
                'description' => 'School fee for ' . $classroom->name . ' - ' . $term->name,
            ]);
        }
    }
}
