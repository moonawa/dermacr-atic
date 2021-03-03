<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        
        'age',
        'profession',
        'etat',
        'sexe',
        'adresse',
        'users_id',
    ];

    public function medecins()
    {
     
        return $this->belongsToMany('App\Medecin')->withPivot('duree', 'antecedent', 'heredite', 'photo');

    }

    public function users(){
        return $this->belongsTo('App\User');
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
