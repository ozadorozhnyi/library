<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Author extends Model
{
    protected $guarded = [];

    protected $dates = ['dob'];

    protected $casts = [
        'dob' => 'date'
    ];

    public function setDobAttribute($dob)
    {
        $this->attributes['dob'] = Carbon::parse($dob);
    }
}

