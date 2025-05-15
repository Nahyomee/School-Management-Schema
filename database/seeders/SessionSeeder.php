<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Session::create([
            'school_id' => School::first()->id,
            'name' => '2024/2025'
        ]);
    }
}
