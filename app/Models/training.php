<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class training extends Model
{
    protected $table = 'trainingen';
    protected $primaryKey = 'TrainingNummer';
    use HasFactory;
    use Sortable;

    public $sortable = ['TeamNummer', 'TrainingNaam', 'startTijd', 'created_at'];

    public function oefeningen()
    {
        return $this->belongsToMany('App\Models\oefening', 'trainingen_oefeningen', "trainingnummer", "oefeningnummer");
    }

}
