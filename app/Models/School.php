<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name', 'address', 'email', 'phone'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
    public function terms()
    {
        return $this->hasMany(Term::class);
    }

    public function assessmentType()
    {
        return $this->hasMany(AssessmentType::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }
}
