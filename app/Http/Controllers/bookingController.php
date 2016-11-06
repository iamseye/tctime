<?php

namespace App\Http\Controllers;

use App\Ages;
use App\Bookings;
use App\Http\Traits\MsgTrait;
use App\RegularDates;
use App\Tours;
use Illuminate\Http\Request;

use App\Http\Requests;

class bookingController extends Controller
{
    use MsgTrait;

    public function bookingShow (Request $request)
    {
        $tour_id=$request->tour_id;
        $regular_dates_id = $request->regular_dates;

        $tour=Tours::findorfail($tour_id);

        if($tour->schedule_type=='regular')
        {
            $date=RegularDates::findorfail($regular_dates_id)->date;
        }
        else
        {
            $startHourMin = date_format(date_create($tour->tour_start_time), 'Y/m/d H:i');
            $endHourMin = date_format(date_create($tour->tour_end_time), 'Y/m/d H:i');;
            $date = $startHourMin . ' - ' . $endHourMin;
        }

        $ages=Ages::all();

        $ageOpt=array(''=>'-請選擇-');

        foreach($ages as $age)
        {
            $ageOpt[$age->id]=$age->range;
        }

        $booking= new \stdClass();
        $booking->tour_id=$tour_id;
        $booking->date=$date;
        $booking->ageOpt=$ageOpt;
        $booking->regular_dates_id=$regular_dates_id;

        return view('front.tour.booking',compact('booking'));
    }

    public function store (Request $request)
    {
        $booking=Bookings::create($request->all());

        return redirect('/tour')->with('flash_msg', '預定成功');

    }
}
