<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Knowledge extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'know',
    ];
}
