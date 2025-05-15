<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school = School::first();
        //Students
        User::factory()->count(10)->create(['school_id' => $school->id]);

        //Teachers
        User::factory()->count(5)->create(['role' => 'teacher', 'school_id' => $school->id]);
        
    }
}
