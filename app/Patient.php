<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        
        'age',
        'etat',
        'durée',
        'photo',
        'users_id',
    ];

    public function medecins()
    {
        return $this->belongsToMany('App\Medecin');
    }

    public function users(){
        return $this->belongsTo('App\User');
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
