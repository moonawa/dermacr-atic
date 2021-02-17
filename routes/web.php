<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acne', function () {
    return view('acne');
});

Route::get('/demangeaisons', function () {
    return view('demangeaisons');
});

Route::get('/userlist', 'UserController@index');
Route::post('/useradd', 'UserController@store');

//pour les medecins
Route::get('/dermato', function () {return view('/layouts/dermato'); });
Route::get('/medecinlist', 'MedecinController@index');
Route::post('/medecinadd', 'MedecinController@store');
Route::get('/insmed', function () {return view('inscription');}); 
//liste des patients d'un medecin
Route::get('/pat', 'MedecinController@patientmedecin');
Route::get('/inscription', 'MedecinController@inscription')->name('inscription');
Route::resource('medecins', 'MedecinController');
Route::get('/select', 'MedecinController@select')->name('select');


Route::get('/ordonnance', 'OrdonnanceController@index');
Route::post('/ordonnanceadd', 'OrdonnanceController@store');






//pour les admins
Route::get('/admin', function () {return view('/layouts/admin'); });
Route::get('/adminlist', 'AdminController@index');
Route::post('/adminaddd', 'AdminController@store');

//pour les patients
Route::get('/patient', function () { return view('/layouts/patient'); });
Route::get('/patientlist', 'PatientController@index');
Route::resource('patients', 'PatientController');
Route::get('/inspat', function () {return view('inspatient');}); 
Route::get('/choose', 'PatientController@choose');
Route::get('/patient/edit', 'PatientController@edit');
Route::patch('/patient/edit', 'PatientController@update');
Route::get('patients/show/{id}', 'PatientController@show');




