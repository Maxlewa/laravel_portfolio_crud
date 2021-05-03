<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    // CREATE
    public function create() {
        return view('admin.portfolio.portfolioCreate');
    }

    // STORE
    public function store(Request $request){
        request()->validate([
            "filter" => ["required"],
            "image" => ["required", "mimes:jpg, jpeg, png", "max:5000"],
        ]);

        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;

        // STORAGE

        if ($request->file('image') != null) {
            Storage::delete('public/img/' . $portfolio->image);
            Storage::put('public/img/', $request->file('image'));

            // DB
    
            $portfolio->image = $request->file('image')->hashName();
        }

        $portfolio->save();
        return redirect()->route('adminHome');
    }

    // DESTROY
    public function destroy(Portfolio $id) {
        $id->delete();
        return redirect()->route('adminHome');
    }

    // EDIT
    public function edit(Portfolio $id) {
        $portfolio = $id;
        return view('admin.portfolio.portfolioEdit', compact('portfolio'));
    }
    
    // UPDATE
    public function update(Portfolio $id, Request $request) {
        request()->validate([
            "filter" => ["required"],
            "image" => ["required", "mimes:jpg, jpeg, png", "max:5000"],
        ]);

        $portfolio = $id;
        $portfolio->filter = $request->filter;

        // STORAGE

        if ($request->file('image') != null) {
            Storage::delete('public/img/' . $portfolio->image);
            Storage::put('public/img/', $request->file('image'));

            // DB
    
            $portfolio->image = $request->file('image')->hashName();
        }
        
        $portfolio->save();
        return redirect('/admin' . $portfolio->$id)->with('success', 'Modifications enregistrées');
    }
}
