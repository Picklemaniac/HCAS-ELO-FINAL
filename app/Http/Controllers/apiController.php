<?php

namespace App\Http\Controllers;

use App\Models\training;
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

    public function oefeningSearchNaam(Request $request) {
        return oefening::where('Titel', 'like', '%'.$request->input('Titel').'%')->get();
    }

    public function trainingIndex() {
        return training::all();
    }

    public function trainingTeam(Request $request) {
        return training::where('TeamNummer', $request->input('TeamNummer'))->get();
    }
}
