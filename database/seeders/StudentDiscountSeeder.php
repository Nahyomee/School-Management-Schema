<?php

namespace Database\Seeders;

use App\Models\Discount;
use App\Models\School;
use App\Models\Session;
use App\Models\Student;
use App\Models\StudentDiscount;
use App\Models\Term;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $school = School::first();
        $session = Session::first();
        $term = Term::first();
        $discounts = Discount::all();
        


        foreach ($students as $student) {
            if (rand(0, 1)) { // Assign discount randomly to about 50% of students
                $discount = $discounts->random();
                StudentDiscount::create([
                    'school_id' => $school->id,
                    'student_id' => $student->id,
                    'discount_id' => $discount->id,
                    'type' => $discount->type,
                    'amount' => $discount->amount ?? $discount->percentage,
                    'session_id' => $session->id,
                    'term_id' => $term->id,
                ]);
            }
        }
    }
}
