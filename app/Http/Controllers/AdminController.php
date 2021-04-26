<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Fact;
use App\Models\Perso;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome() {
        $varPerso = Perso::all();
        $varContacts = Contact::all();
        $varFacts = Fact::all();
        $varPortfolios = Portfolio::all();
        $varServices = Service::all();
        $varSkills = Skill::all();
        return view('admin.adminHome', compact('varPerso', 'varContacts', 'varFacts', 'varPortfolios', 'varServices', 'varSkills'));
    }
}
