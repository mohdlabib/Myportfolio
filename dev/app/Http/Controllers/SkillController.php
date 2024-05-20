<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'icon' => ['required'],
            'language' => ['required'],
        ]);

        return Skill::create($data);
    }

    public function show(Skill $skill)
    {
        return $skill;
    }

    public function update(Request $request, Skill $skill)
    {
        $data = $request->validate([
            'icon' => ['required'],
            'language' => ['required'],
        ]);

        $skill->update($data);

        return $skill;
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();

        return response()->json();
    }
}
