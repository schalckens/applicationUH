<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function contacts() 
    {
        return $this->belongsTo(Contact::class);
    }

    public function civilstates()
    {
        return $this->belongsTo(Civilstate::class);
    }

    public function lawfirm()
    {
        return $this->belongsToMany(Lawfirm::class);
    }
    
}
