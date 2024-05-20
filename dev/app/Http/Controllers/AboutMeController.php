<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        return AboutMe::all();
    }
}
