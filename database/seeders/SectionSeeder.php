<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = ['A', 'B'];
        foreach($sections as $section){
            Section::create([
                'school_id' => School::first()->id,
                'name' => $section
            ]);
        }
    }
}
