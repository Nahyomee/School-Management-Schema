<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = ['Primary One', 'Primary Two', 'Primary Three'];
        foreach($classrooms as $classroom){
            Classroom::create([
                'school_id' => School::first()->id,
                'name' => $classroom
            ]);
        }
    }
}
