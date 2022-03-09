<?php

namespace App\Http\Controllers\Agency;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Sp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgencyController extends Controller
{
  public function show_form()
  {
    $cats = Cat::all();
    // dd('hi');
    return view('agency.form', compact('cats'));
  }
  public function index()
  {
    // $cats = Cat::all();
    // dd('hi');
    return view('agency.dashboard');
  }
  public function show_pending()
  {
    // dd('hi');
    return view('agency.pending');
  }
  public function store(Request $request)
  {
    // dd($request->all());
    // dd($request->input('cat'));
    $sp = new Sp();
    $sp->user_id = auth()->user()->id;
    $sp->ag_name = $request->ag_name;
    $sp->ag_slug = Str::slug($request->ag_name);
    // dd($sp->ag_slug);
    $sp->zip = $request->zip;
    $sp->desc = $request->desc;
    $sp->mobile = $request->mobile;
    $sp->address = $request->address;
    $sp->cat_id = $request->cat;
    // $sp->ag_name = $request->ag_name;
    $save = $sp->save();
    if ($save) {
      $id = auth()->user()->id;
      $user = User::where('id', $id);
      $user->update(['is_updated' => true]);
      return redirect()->route('agency-pending');
      // dd('success');
    }
  }
}
