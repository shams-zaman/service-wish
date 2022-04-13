<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Cat;
use App\Models\Tag;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
// use App\Models\Cat;
use App\Models\Sp;
use App\Models\User;
use Carbon\Carbon;
// use Carbon\Carbon;
// use Intervention\Image\Facades\Image;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Cloudinary;
use Illuminate\Support\Facades\Storage;

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
        // dd($blog->cats());
        // return $blog;
        return view('frontend.blog_desc', compact('blog'));
    }
    public function all_blogs()
    {
        // dd('hi');
        $blogs = Blog::all();
        return view('admin.backend.all_blogs', compact('blogs'));
    }
    public function blog_create()
    {
        $tags = Tag::all();
        $cats = Cat::all();
        return view('admin.backend.blog_create', compact('cats', 'tags'));
    }
    public function blog_store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'tag' => 'required',
            'cat' => 'required',
        ]);
        $slug = Str::limit($request->title, 10);

        $imageName = null;
        if ($request->hasFile('blog_cover_img')) {

            $image = $request->file('blog_cover_img');
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post')) {
                Storage::disk('public')->makeDirectory('post');
            }
            $postImage = Image::make($image->getPathname())->resize(1600, 1066)->stream();
            Storage::disk('public')->put('post/' . $imageName, $postImage);
        } else {

            return 'Please Select An Image For Post';
        }
        $blog = new Blog();
        $blog->user_id = auth()->user()->id;
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->slug = $slug;
        $blog->image = $imageName;
        // $blog->image_id = $imageId;
        $save = $blog->save();
        if ($save) {
            $blog->cats()->attach($request->cat);
            $blog->tags()->attach($request->tag);
            return redirect()->route('admin.all_blogs');
        }
    }
    public function blog_edit($id)
    {
        $tags = Tag::all();
        $cats = Cat::all();
        $blog = Blog::find($id);
        return view('admin.backend.blog_edit', compact('blog', 'tags', 'cats'));
    }

    public function blog_details($id)
    {
        $blog = Blog::find($id);
        $bcats = $blog->cats;
        $btags = $blog->tags;
        return view('admin.backend.blog_details', compact('blog', 'bcats', 'btags'));
    }
    public function blog_update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $slug = Str::limit($request->title, 10);
        $imageName = null;
        //                                     image

        if ($request->hasFile('blog_cover_img')) {
            $image = $request->file('blog_cover_img');
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('post')) {
                Storage::disk('public')->makeDirectory('post');
            }
            //            delete old post image
            if (Storage::disk('public')->exists('post/' . $blog->image)) {
                Storage::disk('public')->delete('post/' . $blog->image);
            }
            $postImage = Image::make($image->getPathname())->resize(1066, 1066)->stream();
            Storage::disk('public')->put('post/' . $imageName, $postImage);
        }
        $blog->image = $imageName;
        $blog->user_id = auth()->user()->id;
        $blog->title = $request->title;
        $blog->desc = $request->desc;
        $blog->slug = $slug;
        $save = $blog->save();
        if ($save) {
            // dd('yes');
            $blog->cats()->attach($request->cat);
            $blog->tags()->attach($request->tag);
            return redirect()->route('admin.all_blogs');
            // $user->update(['is_updated' => true]);
        }
        return view('admin.backend.blog_details', compact('blog', 'bcats', 'btags'));
    }
}

// Cloudinary Image save {

          // $file = $request->file('blog_cover_img');
            // $uploadedFileUrl = Cloudinary::upload($file->getPathname(), [
            //     'transformation' => [
            //         'width' => 100,
            //         'height' => 100
            //     ]
            // ]);
            // $imageName = $uploadedFileUrl->getSecurePath();
            // $imageId = $uploadedFileUrl->getPublicId();
// }