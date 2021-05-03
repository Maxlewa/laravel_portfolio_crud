<?php

namespace App\Http\Controllers;

use App\Models\Perso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersoController extends Controller
{
    public function edit(Perso $id) {
        $perso = $id;
        return view('admin.about.aboutEdit', compact('perso'));
    }
    public function update(Perso $id, Request $request) {
        request()->validate([
            "nom" => ["required"],
            "prenom" => ["required"],
            "job" => ["required"],
            "website" => ["required"],
            "phone" => ["required", "numeric"],
            "city" => ["required"],
            "country" => ["required"],
            "age" => ["required", "numeric"],
            "degree" => ["required"],
            "email" => ["required", "email"],
            "intro" => ["required"],
            "bio" => ["required"],
            "italic" => ["required"],
            "state" => ["required"],
            "image" => ["required", "mimes:jpg, jpeg, png", "max:5000"]
        ]);
        $perso = $id;
        $perso->nom = $request->nom;
        $perso->prenom = $request->prenom;
        $perso->job = $request->job;
        $perso->website = $request->website;
        $perso->phone = $request->phone;
        $perso->city = $request->city;
        $perso->country = $request->country;
        $perso->age = $request->age;
        $perso->degree = $request->degree;
        $perso->email = $request->email;
        $perso->intro = $request->intro;
        $perso->bio = $request->bio;
        $perso->italic = $request->italic;
        $perso->state = $request->state;

        if ($request->file('image') != null) {
            Storage::delete('public/img/' . $perso->image);
            Storage::put('public/img/', $request->file('image'));

            // DB
    
            $perso->image = $request->file('image')->hashName();
        }

        $perso->save();
        return redirect('/admin' . $perso->$id)->with('success', 'Modifications enregistrées');
    }
}
