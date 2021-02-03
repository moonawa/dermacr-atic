<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $fillable = [
        'medicament',
        'dosage',
        'indication',
        'renouveau',
        'medecins_id',
        'patients_id',
       
    ];

    public function patients(){
        return $this->belongsTo('App\Patient');
    }
    public function medecins(){
        return $this->belongsTo('App\Medecin');
    }
}
