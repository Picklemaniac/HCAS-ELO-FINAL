<?php

namespace App\Http\Controllers;

use App\Models\oefening;
use Illuminate\Http\Request;

class oefeningcontroller extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $OefeningID = $id;
        $oefening = oefening::where('OefeningNummer', $OefeningID)->first();
        return view('DetailsOefeningen', array('oefening'=>$oefening));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
