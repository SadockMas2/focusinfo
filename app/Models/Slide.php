<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $fillable = [
        's_titre',
        's_image',
        's_desc',
        's_bg_image',
        's_link',
        's_linkText',
        's_status',
    ];
}
