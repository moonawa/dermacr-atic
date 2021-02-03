<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::with('users')->get();
        return response()->json($admins, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
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
            'profession'=>'required',
          
        ]);
        $user = new User();
        $bytes = random_bytes(8);
        User::create([ 
          'name' => $request['name'],
          'email' => $request['email'],
          //'password' => Hash::make($request['password']),
          'password' => Hash::make($bytes),
          'telephone' => $request['telephone'],
          'sexe' =>  $request['sexe'],
          'role' => 'SUPERADMIN',
          'localistion' =>  $request['localistion'],
         ]);

         $admin= new Admin;
           Admin::create([
                'profession' => $request['profession'],
                'users_id' => 1
            ]);
            echo $bytes;
            
            return $bytes;
    }

    /**
     * Display the specified resource.
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

    public function admin(Request $request)
    {
        $user = Auth::user()->id->get();
        $admin= Admin::create([
        'profession' => $request['profession'],
        ]);
        $admin->users()->save();
        return back()->with('success','l\'Entreprise et son Utilisateur ont été crée avec succes');
    }

    
}
