<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['school_id', 'name', 'type', 'amount',  'description'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_discounts')
            ->withPivot('fee_id')
            ->withTimestamps();
    }
}
