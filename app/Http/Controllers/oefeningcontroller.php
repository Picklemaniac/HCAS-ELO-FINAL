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

    public function create(Request $request)
    {
        $request->validate([
            'titel' => 'required|string|',
            'domein' => 'required|string|',
            'sector' => 'required|string|',
            'subsector' => '|string|',
            'trainingonderdeel' => '|string|',
            'auteur' => 'required|string|',
            'tijd' => 'required|integer|',
            'doelgroep' => 'required|string|',
            'doel' => 'string|',
            'spelfase' => 'string|',
            'werkvorm' => 'string|',
            'leerfase' => 'required|string|',
            'organisatie' => 'string|',
            'moeilijkheidsgraad' => 'string|',
            'moeilijkermaken' => 'string|',
            'voorkomendefouten' => 'string|',
            'tips' => 'string|',
            'hulpmiddelen' => 'string|',
            'aandachtspunten' => 'string|',
            'imagelink' => 'string|',
            'videolink' => 'string|',
        ]);


        $oefeningen = new oefening;

        $oefeningen->TrainingNummer = 0;
        $oefeningen->Titel = $request->titel;
        $oefeningen->Domein = $request->domein;
        $oefeningen->Sector = $request->sector;
        $oefeningen->Subsector = $request->subsector;
        $oefeningen->Trainingonderdeel = $request->trainingonderdeel;
        $oefeningen->Auteur	= $request->auteur;
        $oefeningen->Tijd = $request->tijd;
        $oefeningen->Doelgroep = $request->doelgroep;
        $oefeningen->Doel = $request->doel;
        $oefeningen->Spelfase = $request->spelfase;
        $oefeningen->Werkvorm = $request->werkvorm;
        $oefeningen->Leerfase = $request->leerfase;
        $oefeningen->Organisatie = $request->organisatie;
        $oefeningen->Moeilijkheidsgraad = $request->moeilijkheidsgraad;
        $oefeningen->MoeilijkerMaken = $request->moeilijkermaken;
        $oefeningen->MakkelijkerMaken = $request->makkelijkermaken;
        $oefeningen->VoorkomendeFouten = $request->voorkomendefouten;
        $oefeningen->Tips = $request->tips;
        $oefeningen->Hulpmiddelen = $request->hulpmiddelen;
        $oefeningen->Aandachtspunten = $request->aandachtspunten;
        $oefeningen->ImageLink = $request->imagelink;
        $oefeningen->VideoLink = $request->videolink;

        $oefeningen->save();

        return redirect()->route('AuteurDashboard');
    }


    public function store(Request $request)
    {
        //
    }

    public function showAllToAuthor()
    {
        $oefeningen = oefening::all();
        return view('Author\AuthorDashboard', ['oefeningen' => $oefeningen]);
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