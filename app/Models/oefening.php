<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class oefening extends Model
{
    protected $table = 'oefeningen';
    protected $primaryKey = 'OefeningNummer';
    use HasFactory;
    use Sortable;

    public $sortable = ['Titel', 'Domein', 'Sector', 'Subsector', 'Auteur', 'Tijd'];

    public function trainingen()
    {
        return $this->belongsToMany('App\Models\training', 'trainingen_oefeningen', "oefeningnummer", "trainingnummer");
    }
}
