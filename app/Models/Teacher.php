<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id', 'dob', 'gender', 'employee_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'teacher_subjects');
    }

    public function classrooms()
    {
        return $this->belongsToMany(Subject::class, 'teacher_classrooms');
    }
}
