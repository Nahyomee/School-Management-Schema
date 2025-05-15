<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClassroom extends Model
{
    protected $fillable = ['student_id', 'classroom_id', 'section_id', 'session_id', 'term_id'];
}
