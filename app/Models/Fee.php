<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = ['school_id', 'classroom_id', 'session_id', 'term_id', 'name', 'description', 'amount'];

    public function payments()
    {
        return $this->hasMany(StudentPayment::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
