<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Greeting extends Model
{
    public $timestamps = false;

    protected $table = 'greeting';

    protected $fillable = [
        'name',
        'firstSlogan',
        'secondSlogan',
    ];
}
