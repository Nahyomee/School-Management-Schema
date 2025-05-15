<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['school_id', 'name'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_subject');
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_subject');
    }
}
