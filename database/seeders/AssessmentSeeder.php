<?php

namespace Database\Seeders;

use App\Models\Assessment;
use App\Models\AssessmentType;
use App\Models\Classroom;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = Classroom::all();
        $types = AssessmentType::all();
        foreach($classrooms as $classroom){
            foreach($types as $type){
                Assessment::create([
                    'school_id' => School::first()->id,
                    'assessment_type_id' => $type->id,
                    'classroom_id' => $classroom->id,
                    'title' => fake()->name(),
                    'description' => fake()->text(),
                    'total_score' => fake()->numberBetween(10, 50)
                ]);
            }
        }
    }
}
