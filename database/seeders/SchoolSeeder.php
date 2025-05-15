<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        School::create([
            'name' => 'Bright Future Academy',
            'address' => '123 Main Street',
            'email' => 'info@brightfuture.com',
            'phone' => '1234567890',
        ]);
    }
}
