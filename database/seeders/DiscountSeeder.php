<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $school = School::first();
        Discount::create([
            'school_id' => $school->id,
            'name' => 'Scholarship',
            'amount' => 50,
            'type' => 'percentage',
            'description' => '50% scholarship for top-performing students'
        ]);

        Discount::create([
            'school_id' => $school->id,
            'name' => 'Sibling Discount',
            'amount' => 10000,
            'type' => 'flat',
            'description' => 'Flat ₦10,000 discount for families with more than one student'
        ]);
    }
}
