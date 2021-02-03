<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rv extends Model
{
    protected $fillable = [
        'date',
   
    ];
    public function patients(){
        return $this->belongsTo('App\Patient');
    }
    public function medecins(){
        return $this->belongsTo('App\Medecin');
    }
}
