<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'slug',
        'description',
    ];



    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
