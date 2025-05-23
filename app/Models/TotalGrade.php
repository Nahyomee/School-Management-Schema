<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TotalGrade extends Model
{
    protected $fillable = ['school_id', 'student_id', 'subject_id', 'session_id', 'term_id', 'average_score', 'grade_letter', 'remarks'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
