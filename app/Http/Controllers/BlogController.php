<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show()
    {
        $blogs = Blog::all();
        return view('frontend.layouts.blog-posts', compact('blogs'));
    }
    public function showblogitem($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return $blog;
    }
}
