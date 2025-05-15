<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['user_id', 'dob', 'gender', 'student_code'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'student_classrooms');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subjects');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'student_classrooms');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class);
    }
}
