<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::with('users')->get();
        return response()->json($patients, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inspatient');
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

            //  'name' =>'required|max:48',
            //  'email'=>'required',
            //  'password'=>'required',
            //  'telephone' =>'required|max:200',
            'age'=>'required',
           
        ]);
        $user = new User();
        
        User::create([ 
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
          'telephone' => $request['telephone'],
          'sexe' => $request['sexe'],
          'role' => 'PATIENT',
          'localistion' => $request['localistion'],
         ]);

         $patient = new Patient;
         Patient::create([
             'age' =>$request['age'],
             'users_id' => 51,
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
        $patient = Patient::with('users')->find($id);
        return response()->json($patient, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //$patient = Patient::find
        $patient = Patient::with('users')->where('users_id', '=', Auth::user()->id)->value('id');
        $patients = Patient::find($patient);
        return response()->json($patients, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        // $request->validate([
        //     'nom_entreprise' => 'required',
        //     'telephone' => 'required',
        //     'mail' => 'required',
        // ]);  
        $patients = Patient::with('users')->where('users_id', '=', Auth::user()->id)->value('id');
        $patient = Patient::find($patients)   ; 
        $patient->age = request('age');
        $patient->etat = request('etat');
        $patient->durée = request('durée');
        $patient->antecedent = request('antecedent');
        $patient->heredite = request('heredite');
        $patient->photo = request('photo');
        $patient->save();

       
        // $update = ['etat' => $request->etat, 'durée' => $request->durée, 'antecedent' => $request->antecedent, 'heredite' => $request->heredite, 'photo' => $request->photo];
        // Patient::where('id',$patient)->update($update);
         return response()->json($patient, 200);
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
    public function choose(Medecin $medecin){
        $email=  auth()->id();
        //$emails= $_GET["id"];
        //$medecin = 
        $post = \App\Patient::whereId($email)->first();
        $category_id = \App\Medecin::whereId($medecin)->get();
        $post->medecins()->attach($category_id);
        //return back();
        return view('showmed', compact('medecin'));
    }

    
}
