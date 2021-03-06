<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Address extends Model
{
    protected $guarded = [];
    
    public function contacts()
    {
        return $this->hasOne(Contact::class);
    }
}
