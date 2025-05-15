<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSubject extends Model
{

    protected $fillable = ['teacher_id', 'subject_id',  'session_id', 'term_id'];
}
