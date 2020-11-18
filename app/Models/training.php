<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training extends Model
{
    protected $table = 'trainingen';
    protected $primaryKey = 'TrainingNummer';
    use HasFactory;
}
