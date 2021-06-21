<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Civilstate extends Model
{
    // protected $filliable = ['user_id','gender','name','birthname',
    //     'firstname','firstname2','firstname3',
    //     'birthdate','birthplace','nationality_id'
    // ];

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function nationalities() 
    {
        return $this->belongsTo(Nationality::class);
    }
    
    public function lawyers()
    {
        return $this->hasOne(Lawyer::class);
    }
}
