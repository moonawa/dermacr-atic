<?php

namespace App\Http\Controllers;

use App\Medecin;
use App\Patient;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $medecins = Medecin::with('users')->get();
        //return view('welcome', compact('medecins'));
        //return response()->json($medecins, 200);
        return $medecins;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscription');
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
            'hopital'=>'required',
            'code'=>'required',
        ]);
        
      
        $user = new User();
        
        User::create([ 
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
          'telephone' => $request['telephone'],
          'sexe' => $request['sexe'],
          'role' => 'MEDECIN',
          'localistion' => $request['localistion'],
         ]);
         $medecin = new Medecin;
         Medecin::create([
           
            'hopital' =>$request['hopital'],
            'code' => $request['code'],
            'admins_id'  => auth()->id(),
            'users_id' => 50,
            
        ]);
        // $posts = Medecin::with('user')->get();
        //Medecin::create($request->all());   
       // Medecin::with('user')::create($request->all());
       
   
   
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Medecin $medecin)
    {
        // $category = $medecin->users->name;    
        // return view('show', compact('medecin', 'category'));
        return view('showmed', compact('medecin'));
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

     //liste des patients d'un medecin connectée                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
     public function patientmedecin(){   
     // $user = Medecin::with('users')->where('users_id', '=', Auth::user()->id)->get();
      $user = Medecin::with('patients.users')->where('users_id', '=', Auth::user()->id)->get();
      
        //$patient = Medecin::with('patients')->get();

        //$user = \App\Medecin::all();
       // $user = Medecin::where('users_id', '=', Auth::user()->id)->with('patients') ->first();
       // $entreprise = User::with('entreprises')->where('id', '=', Auth::user()->id)->get();      
        //$user = Medecin::with('users')->where('users_id', '=', Auth::user()->id)->get();
        //$entreprise = DB::table('medecins_patients')->where('medecins', 'like', '%'.$search.'%')->paginate(5);
        //$user = DB::table('medecins')::with('patients')->get();
        //$user = DB::table('medecins_patients')->get();
       // return view('patientmedecin', compact('user'));   
       
        //$user = Medecin::with('users')->where('users_id', '=', Auth::user()->id)->get();
        //$pat = $user::with('patients')->get();
        //$user = User::with('medecins')->get();
        // if($user){
        //     $patient   = $user->patients()->get();
        // }
       // return view('medecin.patientlist', compact('medecins')); 
       //$patient = Medecin::with('patients')->where('users_id', '=',  Auth::user()->id)->get();
      // $patient = \App\Medecin::all();
      
       return $user;     
       
    }
     
    

    public function getPatients(Request $request, int $id)
    {
        $entreprise = Medecin::findOrFail($id);
        
        $patient   = $entreprise->patients()->paginate(20);

        return back();
    }

    public function select($id){
        //$user = Medecin::with('users')->getId();
        $r =Medecin::with('users')->where('id',$id)->get();
        return $r;
    }

    
}
