<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{

    protected $fillable = [
        'phone',
        'email',
        'Address',
    ];
}
