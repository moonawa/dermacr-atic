<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        
        'montant',
        'medecin_id',
        'patient_id',
       
    ];
}
