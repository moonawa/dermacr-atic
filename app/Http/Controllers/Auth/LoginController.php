<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     protected function redirectTo(){
        
//      if(Auth::user()->role->contains('SUPERADMIN')){
//          return '/admin'; //redirect to superadmin panel
//      }
//      elseif(Auth::user()->role->contains('MEDECIN')){
//              return '/dermato'; //redirect to admin panel
//      }
//      elseif(Auth::user()->role->contains('PATIENT')){
//          return '/patient'; //redirect to incube panel
//      }
//          return '/home'; //redirect to standard userincube panel
//  }
     $role = Auth::user()->role; 
   
     switch ($role) {
        
       case 'SUPERADMIN':
         return '/admin';
         break;
       case 'MEDECIN':
         return '/dermato';
         break; 
         case 'PATIENT':
             return '/patient';
             break;
  
       default:
         return '/home'; 
       break;
         }
}
}