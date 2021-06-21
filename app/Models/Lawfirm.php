<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lawfirm extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function contacts() 
    {
        return $this->belongsTo(Contact::class);
    }
    public function lawyers()
    {
        return $this->belongsToMany(Lawyer::class);
    }
}
