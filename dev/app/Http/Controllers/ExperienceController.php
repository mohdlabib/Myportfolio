<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        return Experience::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'dateStart' => ['required', 'date'],
            'dateEnd' => ['required', 'date'],
        ]);

        return Experience::create($data);
    }

    public function show(Experience $experience)
    {
        return $experience;
    }

    public function update(Request $request, Experience $experience)
    {
        $data = $request->validate([
            'dateStart' => ['required', 'date'],
            'dateEnd' => ['required', 'date'],
        ]);

        $experience->update($data);

        return $experience;
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return response()->json();
    }
}
