<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['school_id', 'name'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_classroom');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_subject');
    }

    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class);
    }
}
