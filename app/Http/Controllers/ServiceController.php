<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create() {
        return view('admin.services.servicesCreate');
    }
    public function store(Request $request){
        request()->validate([
            "icon" => ["required"],
            "delay" => ["required", "numeric"],
            "title" => ["required"],
            "text" => ["required"],
        ]);
        $services = new Service();
        $services->icon = $request->icon;
        $services->delay = $request->delay;
        $services->title = $request->title;
        $services->text = $request->text;
        $services->save();
        return redirect()->route('adminHome');
    }
    public function destroy(Service $id) {
        $id->delete();
        return redirect()->back();
    }
    public function edit(Service $id) {
        $services = $id;
        return view('admin.services.servicesEdit', compact('services'));
    }
    public function update(Service $id, Request $request) {
        request()->validate([
            "icon" => ["required"],
            "delay" => ["required", "numeric"],
            "title" => ["required"],
            "text" => ["required"],
        ]);
        $services = $id;
        $services->icon = $request->icon;
        $services->delay = $request->delay;
        $services->title = $request->title;
        $services->text = $request->text;
        $services->save();
        return redirect('/admin' . $services->$id)->with('success', 'Modifications enregistrées');
    }
}
