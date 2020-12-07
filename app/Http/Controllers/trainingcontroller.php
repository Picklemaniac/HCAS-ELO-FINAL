<?php

namespace App\Http\Controllers;

use App\Models\oefening;
use App\Models\training;
use Illuminate\Http\Request;

class trainingcontroller extends Controller
{
    public function index()
    {
        $trainingen = training::all();
        return view('userDashboard', ['trainingen' => $trainingen]);
    }


    public function create(Request $request)
    {


        //Maak nieuwe training
        $training = new training;

        $training->teamnummer = $request->teamnummer;
        $training->trainingnaam = $request->trainingnaam;
        $training->starttijd = $request->starttijd;

        $training->save();

        $alloefeningen = explode(',', $request->oefeningen);

        //Voeg alle oefeningen samen met training in koppel tabel
        $training->oefeningen()->sync(oefening::find($alloefeningen));

        return redirect('/trainerDashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
