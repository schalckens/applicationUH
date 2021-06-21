<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    protected $guarded = [];

    public $timestamps = false;
    
    public function civilstates()
    {
        return $this->hasMany(Civilstates::class);
    }
}
