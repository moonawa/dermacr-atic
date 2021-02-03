<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'profession','users_id',
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
