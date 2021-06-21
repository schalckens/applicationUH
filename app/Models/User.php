<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public $timestamps = false; 

    public function roles() 
    {
        return $this->belongsTo(Role::class);
    }
    public function contacts()
    {
        return $this->hasOne(Contact::class);
    }
    public function civilstates() 
    {
        return $this->hasOne(Civilstate::class);
    }
    public function lawyers()
    {
        return $this->hasOne(Lawyer::class);
    }
}