<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('id', 'desc')->get();
        return view('portfolios.index', compact('portfolios'));
    }
}
