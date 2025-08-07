<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'contact_email',
        'contact_phone',
        'address',
        'logo',
        'favicon',
        'description',
        'keywords',
        'site_name',
        'site_url',
        'history_title',
        'history_content',
        'missions',
        'visions',
        'apercu',
        'maps',
        'objectifs',
        'objectifs_specifiques',
        'counter',
        'counter_text',
        'photo_1','photo_2','video_url'
    ];
}
