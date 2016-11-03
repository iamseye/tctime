<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegularDates extends Model
{
    protected $fillable = [
        'tour_id',
        'date'
    ];

    public function tour()
    {
        return $this->belongsTo('App\Tours');
    }
}
