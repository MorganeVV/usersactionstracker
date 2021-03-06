<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class ActionsController extends Controller
{
    public function processForm(Request $request)
    {
        $validatedData = $request->validate([
            'naam' => ['required', 'max:50'],
            'email' => ['required',],
            'reden' => ['required', 'max:255'],
        ]);

        $session_id = session()->getId();
        $validatedData['session_id'] = $session_id;
        Log::info("Contactformulier", $validatedData);

        return response()->json(['Het contactformulier is doorgestuurd. Uw ingevulde gegevens:', $validatedData]);
    }
}
