<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oefening extends Model
{
    protected $table = 'oefeningen';
    protected $primaryKey = 'OefeningNummer';
    use HasFactory;

    public function trainingen()
    {
        return $this->belongsToMany('App\Models\training', 'trainingen_oefeningen', "oefeningnummer", "trainingnummer");
    }
}
