<?php

namespace App\Http\Controllers\Agency;

use App\Models\Sp;
use App\Models\User;
use App\Models\Cat;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cloudinary;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class AgencyController extends Controller
{

  public function myservices_create(Request $request)
  {


    $p = new Service();
    $imageName = null;
    $this->validate($request, [
      'service_name' => 'required',
      "service_pic" => 'required'
    ]);
    if ($request->hasFile('service_pic')) {

      $file = $request->file('service_pic');

      $uploadedFileUrl = Cloudinary::upload($file->getPathname(), [

        'transformation' => [
          'width' => 300,
          'height' => 200,
          'crop' => 'limit'

        ]
      ]);

      $imageName = $uploadedFileUrl->getSecurePath();
      $imageId = $uploadedFileUrl->getPublicId();
      $p->title = $request->service_name;
      $p->image = $imageName;
      $p->imageId = $imageId;
      $p->sp_id = auth()->user()->sp->id;
      $save = $p->save();
      if ($save) {
        return redirect()->back();
      }
    }
  }





  public function myservices()
  {


    $id = auth()->user()->sp->id;
    $services = Service::where('sp_id', $id)->get();
    return view('agency.myservices', compact('services'));
  }
  public function myservice_edit($id)
  {
    $id = auth()->user()->sp->id;
    $services = Service::where('sp_id', $id)->get();
    return view('agency.myservices_edit', compact('services'));
  }


  public function myservice_update(Request $request, $id)

  {
    $s = Service::find($id);
    $imageId = null;
    $imageName = null;
    $old_image_id = $s->imageId;


    if ($request->hasFile('service_pic')) {

      Cloudinary::destroy($old_image_id);

      $file = $request->file('service_pic');
      $uploadedFileUrl = Cloudinary::upload($file->getPathname(), [

        'transformation' => [
          'width' => 300,
          'height' => 200,
          'crop' => 'limit'

        ]
      ]);
      $imageName = $uploadedFileUrl->getSecurePath();
      $imageId = $uploadedFileUrl->getPublicId();
      $s->image = $imageName;
      $s->imageId = $imageId;
      $s->save();
    }
    $s->title = $request->service_name;

    $save = $s->save();
    if ($save) {
      dd('success_ edit');
    }
  }


  public function show_form()
  {


    $cats = Cat::all();
    return view('agency.form', compact('cats'));
  }
  public function profile()
  {
    $id = auth()->user()->id;
    $profile = Sp::where('user_id', $id)->first();

    return view('agency.profile', compact('profile'));
  }
  public function profile_edit($id)
  {
    $cats = Cat::all();
    $profile = Sp::find($id);
    return view('agency.profile_edit', compact('profile', 'cats'));
  }
  public function profile_update(Request $request, $id)
  {
    $this->validate(
      $request,
      [
        'ag_name' => 'required',
        'address' => 'required',
        'zip' => 'required',
        'mobile' => 'required',
        'desc' => 'required',


      ],
      [
        'ag_name.required' => 'choose a Name!',
        'address.required' => 'You have to choose address!',
        'zip.required' => 'You have to choose zip!',
        'desc.required' => 'You have to choose Desc!',
        'mobile.required' => 'You have to choose mobile!',
      ]

    );
    $imageId = null;
    $old_img_id = null;
    $p = Sp::find($id);
    $p->ag_name = $request->ag_name;
    $slug = Str::slug($request->ag_name);
    $p->address = $request->address;
    $p->desc = $request->desc;
    $p->zip = $request->zip;
    $p->mobile = $request->mobile;
    $p->ag_slug = $slug;
    $old_image_id = $p->image_id;

    $imageName = null;

    if ($request->hasFile('sp_cover_img')) {
      Cloudinary::destroy($old_image_id);

      $file = $request->file('sp_cover_img');

      $uploadedFileUrl = Cloudinary::upload($file->getPathname(), [

        'transformation' => [
          'width' => 1920,
          'height' => 1280,
          'crop' => 'limit'

        ]
      ]);

      $imageName = $uploadedFileUrl->getSecurePath();
      $imageId = $uploadedFileUrl->getPublicId();
      $p->image = $imageName;
      $p->image_id = $imageId;
      $save = $p->save();
      if ($save) {
        return redirect()->back();
      }
    }
  }
  public function index()
  {
    return view('agency.dashboard');
  }

  public function show_pending()
  {
    return view('agency.pending');
  }



  public function store(Request $request)
  {
    $imageName = null;
    $this->validate(
      $request,
      [
        'ag_name' => 'required',
        'address' => 'required',
        'zip' => 'required',
        'mobile' => 'required',
        'sp_cover_img' => 'required',
        'desc' => 'required',
      ],
      [
        'ag_name.required' => 'choose a Name!',
        'address.required' => 'You have to choose address!',
        'zip.required' => 'You have to choose zip!',
        'desc.required' => 'You have to choose Desc!',
        'sp_cover_img.required' => 'You have to choose img!',
        'mobile.required' => 'You have to choose mobile!',
      ]

    );


    if ($request->hasFile('sp_cover_img')) {

      $file = $request->file('sp_cover_img');

      $uploadedFileUrl = Cloudinary::upload($file->getPathname(), [

        'transformation' => [
          'width' => 1920,
          'height' => 1280,
          'crop' => 'limit'

        ]
      ]);

      $imageName = $uploadedFileUrl->getSecurePath();
      $imageId = $uploadedFileUrl->getPublicId();
    }


    $slug = Str::slug($request->ag_name);
    $sp = new Sp();
    $sp->user_id = auth()->user()->id;
    $sp->ag_name = $request->ag_name;
    $sp->ag_slug = $slug;
    $sp->mobile = $request->mobile;
    $sp->zip = $request->zip;
    $sp->desc = $request->desc;
    $sp->image = $imageName;
    $sp->image = $imageName;
    $sp->image_id = $imageId;
    $sp->address = $request->address;
    $sp->cat_id = $request->cat;
    $save = $sp->save();
    if ($save) {

      $id = auth()->user()->id;
      $user = User::where('id', $id);
      $user->update(['is_updated' => true]);
      return redirect()->route('agency-pending');
    }
  }
}
