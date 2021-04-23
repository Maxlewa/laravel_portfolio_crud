<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Perso;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $varPerso = Perso::all();
        $varFacts = Fact::all();
        $varSkills = Skill::all();
        return view('home', compact('varPerso', 'varFacts', 'varSkills'));
    }
}
