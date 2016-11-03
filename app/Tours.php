<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tours extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'picture',
        'picture_list',
        'meeting_point',
        'peopleNum',
        'tour_type',
        'price',
        'early_price',
        'schedule_type',
        'weekly_time_id',
        'tour_start_time',
        'tour_end_time',
        'offShelf',
        'weeks',
        'location_id',
        'booking_id',
    ];

    public function location()
    {
        return $this->belongsTo('App\Locations');
    }

    public function regular_tour()
    {
        return $this->hasMany('App\RegularDates');
    }

    public function bookings()
    {
        return $this->hasMany('App\Bookings');
    }

}