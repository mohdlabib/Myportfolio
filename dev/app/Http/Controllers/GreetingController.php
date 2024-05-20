<?php

namespace App\Http\Controllers;

use App\Models\Greeting;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index()
    {
        return Greeting::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'firstSlogan' => ['required'],
            'secondSlogan' => ['required'],
        ]);

        return Greeting::create($data);
    }

    public function show(Greeting $greeting)
    {
        return $greeting;
    }

    public function update(Request $request, Greeting $greeting)
    {
        $data = $request->validate([
            'name' => ['required'],
            'firstSlogan' => ['required'],
            'secondSlogan' => ['required'],
        ]);

        $greeting->update($data);

        return $greeting;
    }

    public function destroy(Greeting $greeting)
    {
        $greeting->delete();

        return response()->json();
    }
}
