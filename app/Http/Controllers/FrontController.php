<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Perso;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $varPerso = Perso::all();
        $varFacts = Fact::all();
        return view('home', compact('varPerso', 'varFacts'));
    }
}
