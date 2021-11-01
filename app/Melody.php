<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Melody extends Model
{
    protected $table = 'melodies';
    protected $fillable = [
        'id', 'name', 'melody'
    ];
}
