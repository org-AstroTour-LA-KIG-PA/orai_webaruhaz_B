<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Termek extends Model
{

    protected $fillable = [
        'nev',
        'kategoria',
        'leiras',
        'ar'
    ];
}
