<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['student_id', 'subject_id', 'assessment_id', 'session_id', 'term_id', 'score'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }
}
