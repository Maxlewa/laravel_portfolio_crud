<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create() {
        return view('admin.portfolio.portfolioCreate');
    }
    public function store(Request $request){
        request()->validate([
            "filter" => ["required"],
            "image" => ["required"],
        ]);
        $portfolio = new Portfolio();
        $portfolio->filter = $request->filter;
        $portfolio->image = $request->image;
        $portfolio->save();
        return redirect()->route('adminHome');
    }
    public function destroy(Portfolio $id) {
        $id->delete();
        return redirect()->back();
    }
    public function edit(Portfolio $id) {
        $portfolio = $id;
        return view('admin.portfolio.portfolioEdit', compact('portfolio'));
    }
    public function update(Portfolio $id, Request $request) {
        request()->validate([
            "filter" => ["required"],
            "image" => ["required"],
        ]);
        $portfolio = $id;
        $portfolio->filter = $request->filter;
        $portfolio->image = $request->image;
        $portfolio->save();
        return redirect('/admin' . $portfolio->$id)->with('success', 'Modifications enregistrées');
    }
}
