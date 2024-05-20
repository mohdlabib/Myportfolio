<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        return Education::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'dateStart' => ['required', 'date'],
            'dateEnd' => ['required', 'date'],
            'school' => ['required'],
        ]);

        return Education::create($data);
    }

    public function show(Education $education)
    {
        return $education;
    }

    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'dateStart' => ['required', 'date'],
            'dateEnd' => ['required', 'date'],
            'school' => ['required'],
        ]);

        $education->update($data);

        return $education;
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return response()->json();
    }
}
