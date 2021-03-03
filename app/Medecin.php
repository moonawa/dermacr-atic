<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable  = [ 
        'hopital', 'code', 'admin', 'users_id', 'signature', 'departements_id',
    ];

    public function patients()
       {
         
        return $this->belongsToMany('App\Patient')->withPivot('duree', 'antecedent', 'heredite', 'photo');
       } 
       
     
    public function users(){
        return $this->belongsTo('App\User');
    }
    public function departements(){
        return $this->belongsTo('App\Departement');
    }

    

    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }
    public function factures()
    {
        return $this->hasMany('App\Facture');
    }
}
