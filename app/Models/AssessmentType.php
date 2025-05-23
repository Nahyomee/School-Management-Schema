<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssessmentType extends Model
{
    protected $fillable = ['school_id', 'name'];
    

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }
}
