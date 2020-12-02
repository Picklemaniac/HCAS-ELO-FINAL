<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oefening;

class apiController extends Controller
{
    public function oefeningIndex() {
        return oefening::all();
    }

    public function oefeningDomein(Request $request) {
       return oefening::where('Domein', $request->input('Domein'))->get();
    }
}
