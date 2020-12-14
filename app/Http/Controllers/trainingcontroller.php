<?php

namespace App\Http\Controllers;

use App\Models\oefening;
use App\Models\training;
use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class trainingcontroller extends Controller
{
    public function index()
    {
        if(Request()->has('TeamNummer')) {
         $trainingen = training::where('TeamNummer', request('TeamNummer'))->get();
        }
        else {
         $trainingen = training::all();
        }

        $teams = team::all();
        return view('userDashboard', ['trainingen' => $trainingen, 'teams' => $teams]);
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

    public function destroy($id)
    {
        training::where('TrainingNummer', $id)->delete();

        DB::table('trainingen_oefeningen')
            ->where('trainingnummer', $id)
            ->delete();


        return redirect('/trainerDashboard');
    }
}
