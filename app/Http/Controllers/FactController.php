<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function show(Fact $id) {
        $facts = $id;
        return view('admin.facts.factsShow', compact('facts'));
    }
    public function edit(Fact $id) {
        $facts = $id;
        return view('admin.facts.factsEdit', compact('facts'));
    }
    public function update(Fact $id, Request $request) {
        request()->validate([
            "icon" => ["required"],
            "number" => ["required", "numeric"],
            "title" => ["required"],
            "phrase" => ["required"],
        ]);
        $facts = $id;
        $facts->icon = $request->icon;
        $facts->number = $request->number;
        $facts->title = $request->title;
        $facts->phrase = $request->phrase;
        $facts->save();
        return redirect('/admin' . $facts->$id)->with('success', 'Modifications enregistrées');
    }
}
