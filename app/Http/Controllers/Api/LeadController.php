<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewLeadEmailMD;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{

    function store(Request $request)
    {
        // validazione
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|min:3',
            'message' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $lead = Lead::create($request->all());

        Mail::to('cucuzza.antonino@hotmail.com')->send(new NewLeadEmailMD($lead));


        return response()->json([
            'success' => true,
            'message' => '(～￣▽￣)～ GG your mail has been sent (～￣▽￣)～ '
        ]);
    }
}
