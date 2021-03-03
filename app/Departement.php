<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom'
    ];

    public function medecins()
    {
        return $this->hasMany('App\Medecin');
    }
}
