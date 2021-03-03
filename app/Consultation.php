<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        
        'medecin_id',
        'patient_id',
        'durée',
        'antecedent',
        'heredite',
        'photo',
       
    ];

    public function medecins(){
        return $this->belongsTo('App\Medecin');
    }
    public function patients(){
        return $this->belongsTo('App\Patient');
    }

    public function ordonnances()
    {
        return $this->hasMany('App\Ordonnance');
    }
    public function rvs()
    {
        return $this->hasMany('App\Rv');
    }
}
