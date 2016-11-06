<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $fillable = [
        'name',
        'nationality',
        'phone',
        'email',
        'paid',
        'situation',
        'tours_id',
        'ages_id',
        'regular_dates_id'
    ];

    public function age()
    {
        return $this->belongsTo('App\Ages','ages_id');
    }

    public function tour()
    {
        return $this->belongsTo('App\Tours','tours_id');
    }

    public function regular_tour()
    {
        return $this->belongsTo('App\RegularDates','regular_dates_id');
    }
}