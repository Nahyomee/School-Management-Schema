<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = ['school_id', 'title', 'content'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
