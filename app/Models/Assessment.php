<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'school_id',
        'assessment_type_id',
        'classroom_id',
        'title',
        'description',
        'total_score'
    ];

    public function type()
    {
        return $this->belongsTo(AssessmentType::class, 'assessment_type_id');
    }
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
