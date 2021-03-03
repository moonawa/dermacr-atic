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
        'consultations_id',
       
    ];

    public function consultations(){
        return $this->belongsTo('App\Consultation');
    }
   
}
