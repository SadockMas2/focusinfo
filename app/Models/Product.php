<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'produit',
        'prix',
        'description',
        'photo'
    ];
}
