<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'dateStart',
        'dateEnd',
        'school',
    ];

    protected $casts = [
        'dateStart' => 'date',
        'dateEnd' => 'date',
    ];
}
