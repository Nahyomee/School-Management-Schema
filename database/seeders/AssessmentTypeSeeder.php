<?php

namespace Database\Seeders;

use App\Models\AssessmentType;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssessmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Quiz', 'Exam', 'Assignment'];
        foreach($types as $type){
            AssessmentType::create([
                'school_id' => School::first()->id,
                'name' => $type
            ]);
        }
    }
}
