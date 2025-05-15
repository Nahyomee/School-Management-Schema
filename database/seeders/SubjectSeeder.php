<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = ['Mathematics', 'English', 'Science', 'Art'];
        foreach($subjects as $subject){
            Subject::create([
                'school_id' => School::first()->id,
                'name' => $subject
            ]);
        }
    }
}
