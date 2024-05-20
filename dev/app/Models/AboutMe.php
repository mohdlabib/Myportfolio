<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    protected $fillable = [
        'photo',
        'desc',
        'name',
        'age',
        'job',
        'citizenship',
        'residence',
        'url',
    ];

    protected $casts = [
        'age' => 'date',
    ];
}
