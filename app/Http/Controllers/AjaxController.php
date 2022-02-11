<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class AjaxController extends Controller
{
    public function ajaxRequestPost(Request $request)
    {
        $session_id = session()->getId();
        $request['session_id'] = $session_id;
        $input = $request->all();
          
        Log::info($input);

        return response()->json(['success'=>'Ajax request ontvangen.']);
    }
}
