<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overview extends Model
{
    //
    protected $fillable = [
        'website_title',
        'keyword',
        'description',
        'logo',
        'favicon',
        'video_path',
        'video_title',
        'video_content',
        'about',
        'contact_phone',
        'contact_email',
        'contact_add'
    ];
}
