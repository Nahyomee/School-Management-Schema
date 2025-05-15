<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    protected $fillable = ['student_id', 'session_id', 'term_id', 'date', 'present'];

    public function student()
    {
        return $this->belongsTo(Student::class);
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
