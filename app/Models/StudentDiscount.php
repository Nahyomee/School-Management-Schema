<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentDiscount extends Model
{
    protected $fillable = ['school_id', 'student_id', 'discount_id', 'type', 'amount', 'session_id', 'term_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
