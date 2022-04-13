<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Models\Cat;
use App\Models\Tag;
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
    public function tag_store(Request $request)
    {
        // dd('yes');
        // dd($request->all());
        $tag = new Tag();
        $tag->tag_name = $request->tag_name;
        $tag->slug = Str::slug($request->tag_name);
        $save = $tag->save();
        if ($save) {
            return redirect()->route('admin.cat.show');
        }
    }
    public function index()
    {
        $tags = Tag::all();
        $cats = Cat::all();
        return view('admin.backend.cat_show', compact('cats', 'tags'));
    }
    public function tag_edit($id)
    {
        $tags = tag::all();
        $edit_tag = Tag::find($id);
        return view('admin.backend.tag_edit', compact('edit_tag'));
    }
    public function cat_update(Request $request, $id)
    {
        $cat = Cat::find($id);
        $cat->cat_name = $request->cat_name;
        $cat->slug = Str::slug($request->cat_name);
        $tags = Tag::all();

        $cat->save();
        $cats = Cat::all();
        return view('admin.backend.cat_show', compact('cats', 'tags'));
    }
    public function tag_update(Request $request, $id)
    {
        $tag = Tag::find($id);
        $tag->tag_name = $request->tag_name;
        $tag->slug = Str::slug($request->tag_name);
        $tag->save();
        $tags = tag::all();
        $cats = Cat::all();

        return view('admin.backend.cat_show', compact('tags', 'cats'));
    }
    public function cat_edit($id)
    {
        $cat = Cat::find($id);
        return view('admin.backend.cat_edit', compact('cat'));
    }
}
