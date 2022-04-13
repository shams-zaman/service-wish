<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cat;
use App\Models\Role;
use App\Models\Service;
use App\Models\Sp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{

    public function showagn($slug)
    {
        if (Cat::where('slug', $slug)->exists()) {
            $cat =  Cat::where('slug', $slug)->first();
            $result =  $cat->sps;
            return view('hospital', compact('result'));
        } else {
            return "Invalid Category";
        }
    }
    public function ag_details($slug)
    {
        if (Sp::where('ag_slug', $slug)->exists()) {
            $result =  Sp::where('ag_slug', $slug)->first();

            return view('frontend.job-desc', compact('result'));
        } else {
            return "Invalid Agency";
        }
    }
    public function ag_details_enq($slug)
    {
        if (Sp::where('ag_slug', $slug)->exists()) {
            $result =  Sp::where('ag_slug', $slug)->first();

            return view('frontend.job_desc_enq', compact('result'));
        } else {
            return "Invalid Agency";
        }
    }

    public function all_agency()
    {
        $results = Sp::paginate(7);

        // return view('all_agency');
        return view('all_agency', compact('results'));
    }
    public function agency_desc($id)
    {
        // dd('hi');
        $user = Sp::find($id);
        // dd($user);
        // $result = Sp::all();
        return view('admin.backend.ag_desc', compact('user'));
    }
    public function show_ag_req()
    {
        $profiles = Sp::whereHas(
            'user',
            function ($q) {
                $q->where('role_id', 2)->where('is_updated', '1');
            }
        )->get();
        // dd($profiles);
        return view('admin.backend.ag_req', compact('profiles'));
        // return view('admin.')
    }
    public function agency_aprove($id)
    {
        $user = User::find($id);
        $user->role_id = 3;
        $user->save();
        return redirect()->route('admin.agency_request');
        // dd($role_id);

    }
}
