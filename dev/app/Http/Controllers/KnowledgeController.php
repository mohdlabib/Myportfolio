<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;

class KnowledgeController extends Controller
{
    public function index()
    {
        return Knowledge::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'know' => ['required'],
        ]);

        return Knowledge::create($data);
    }

    public function show(Knowledge $knowledge)
    {
        return $knowledge;
    }

    public function update(Request $request, Knowledge $knowledge)
    {
        $data = $request->validate([
            'know' => ['required'],
        ]);

        $knowledge->update($data);

        return $knowledge;
    }

    public function destroy(Knowledge $knowledge)
    {
        $knowledge->delete();

        return response()->json();
    }
}
