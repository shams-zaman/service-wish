<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Req;
use App\Models\Sp;
use App\Models\User;
use App\Notifications\ClientEnq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $sps = Sp::orderBy('id')->take(8)->get();
        $top_cat = Cat::find(1);
        $other_cats = Cat::where('id', '>', '1')->take(4)->get();
        return view('welcome', compact('sps', 'top_cat', 'other_cats'));
    }
    public function enq_submit(Request $request, $id)
    {
        $user = User::where('email', 'adilz.official@gmail.com')->get();
        $req = new Req();
        $req->sp_id = $id;
        $req->service_id = $request->enq_service;
        $req->mobile = $request->enq_mobile;
        $req->desc = $request->enq_desc;
        $req->name = $request->enq_name;
        // $req->desc = $request->enq_desc;
        $req->email = $request->enq_email;
        $req->zip = $request->enq_zip;
        $save = $req->save();
        if ($save) {
            Notification::send($user, new ClientEnq($req));
            return 'success';
        }
    }
}
