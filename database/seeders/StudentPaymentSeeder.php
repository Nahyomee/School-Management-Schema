<?php

namespace Database\Seeders;

use App\Models\Fee;
use App\Models\School;
use App\Models\Session;
use App\Models\Student;
use App\Models\StudentPayment;
use App\Models\Term;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $session = Session::first();
        $term = Term::first();
        $school = School::first();

        foreach ($students as $student) {
            $fee = Fee::where('classroom_id', $student->classrooms()->first()->id)->first();
            StudentPayment::create([
                'school_id' => $school->id,
                'student_id' => $student->id,
                'fee_id' => $fee->id,
                'amount_paid' => $fee->amount,
                'payment_date' => Carbon::now()->subDays(rand(1, 100)),
                'payment_method' => fake()->randomElement(['cash', 'bank_transfer', 'card']),
                'reference' => fake()->bothify('REF-##??#'),
                'session_id' => $session->id,
                'term_id' => $term->id,
            ]);
        }
    }
}
