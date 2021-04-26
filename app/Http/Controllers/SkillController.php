<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function destroy(Skill $id) {
        $id->delete();
        return redirect()->back();
    }
    public function edit(Skill $id) {
        $skills = $id;
        return view('admin.skills.skillsEdit', compact('skills'));
    }
    public function update(Skill $id, Request $request) {
        request()->validate([
            "codelg" => ["required"],
            "progress" => ["required"],
        ]);
        $skills = $id;
        $skills->codelg = $request->codelg;
        $skills->progress = $request->progress;
        $skills->save();
        return redirect('/admin' . $skills->$id)->with('success', 'Modifications enregistrées');
    }
}
