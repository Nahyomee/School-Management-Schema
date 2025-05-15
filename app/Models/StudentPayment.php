<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentPayment extends Model
{
    protected $fillable = ['school_id', 'student_id', 'fee_id', 'session_id', 'term_id', 'amount_paid', 'payment_date', 'payment_method', 'reference'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function fee()
    {
        return $this->belongsTo(Fee::class);
    }
}
