<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Benevole extends Model
{
    protected $fillable=[
        'noms',
        'fonction',
        'photo',
        'facebook',
        'twitter',
        'instagram',
        'status'
    ];
}
