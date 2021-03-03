<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Ordonnance;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdonnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $ordonnance = Ordonnance::all();
       $patient = Patient::with('users')->where('users_id', '=', Auth::user()->id)->value('id');
       $ordonnance = Ordonnance::with('patients')->where('patients_id', '=', $patient)->get();
        return response()->json($ordonnance, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'medicament' =>'required',
            'dosage'=>'required',
            'indication'=>'required',
            'renouveau' =>'required',
            // 'medecins_id'=>'required',
            // 'patients_id'=>'required',
        ]);
        //$user = new Ordonnance();
        $medecin = Medecin::with('users')->where('users_id', '=', Auth::user()->id)->value('id');
        Ordonnance::create([ 
          'medicament' => $request['medicament'],
          'dosage' => $request['dosage'],
          'indication' => $request['indication'],
          'renouveau' => $request['renouveau'],
          'medecins_id' => $medecin,
          'patients_id' => 2,
         ]);
         return back();
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
