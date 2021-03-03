<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rv extends Model
{
    protected $fillable = [
        'date',
        'consultations_id',
   
    ];
    

    public function consultations(){
        return $this->belongsTo('App\Consultation');
    }
}
