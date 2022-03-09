<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $cat = new Cat();
        $cat->cat_name = $request->cat_name;
        $cat->slug = Str::slug($request->cat_name);
        $save = $cat->save();
        if ($save) {
            return redirect()->route('admin.cat.show');
        }
    }
    public function index()
    {
        $cats = Cat::all();
        return view('admin.backend.cat_show', compact('cats'));
    }
}
