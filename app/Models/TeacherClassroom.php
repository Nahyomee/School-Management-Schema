<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherClassroom extends Model
{
    protected $fillable = ['teacher_id', 'classroom_id', 'section_id', 'session_id', 'term_id'];
    
}
