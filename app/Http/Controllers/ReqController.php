<?php

namespace App\Http\Controllers;

use App\Models\Enq;
use Illuminate\Http\Request;

class ReqController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'text' => 'required',
        ]);
        $enq = new Enq();
        $enq->name = $request->name;
        $enq->email = $request->email;
        $enq->text = $request->text;
        $save = $enq->save();
        if ($save) {
            dd('success');
        } else {
            dd('wrong');
        }
    }
}
