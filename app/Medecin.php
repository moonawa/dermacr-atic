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
        'hopital', 'code', 'admins_id', 'users_id',
    ];

    public function patients()
       {
           return $this->belongsToMany('App\Patient');
       } 
       
    public function admins(){
        return $this->belongsTo('App\Admin');
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
