<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    protected $fillable =
    [
        'type',
        'price',
    ];
}
