<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Term;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Term::create([
            'school_id' => School::first()->id,
            'name' => 'First Term'
        ]);
    }
}
