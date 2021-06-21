<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function addresses() 
    {
        return $this->belongsTo(Address::class);
    }
    public function lawfirms()
    {
        return $this->hasOne(Lawfirm::class);
    }
    public function lawyers()
    {
        return $this->hasOne(Lawyer::class);
    }
}
