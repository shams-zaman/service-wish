<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Req;
use App\Models\Service;
use App\Models\Sp;

class QuoteController extends Controller
{
    public function quote_req()
    {
        if (auth()->user()->role_id == 1) {
            $reqs = Req::where('is_approved', 'null')->get();
            return view('admin.backend.quote_req', compact('reqs'));
        } else {
            $reqs = Req::where('is_approved', 'pending')->get();
            return view('agency.ag_quotes', compact('reqs'));
        }
    }

    //
    public function quote_details($id)
    {

        $req = Req::find($id);
        $sp = Sp::where('id', $req->sp_id)->first();
        $service = Service::where('id', $req->service_id)->first();
        if (auth()->user()->role_id == 1) {

            return view('admin.backend.quote_details', compact('req', 'sp', 'service'));
        } else {
            return view('agency.backend.quote_details', compact('req', 'sp', 'service'));
        }
    }
    public function quote_assign($id)
    {

        $req = Req::find($id);
        $req->is_approved = 'pending';

        $save = $req->save();
        if ($save) {
            dd('success');
        }
    }
}
