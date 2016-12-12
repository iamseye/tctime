<?php

namespace App\Http\Controllers;

use App\Ages;
use App\Locations;
use App\RegularDates;
use App\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class tourController extends Controller
{
    public function index()
    {
        $tours=Tours::where('offShelf',0)->orderBy('tour_start_time', 'asc')->get();

        $locations=Locations::all();

        $locationOpt=array(''=>'-請選擇-');

        foreach($locations as $location)
        {
            $locationOpt[$location->id]=$location->name;
        }

        return view('front.tour.index',compact('tours','locationOpt'));
    }

    public function show($id)
    {
        $tour=Tours::findOrFail($id);

        $location_name=Tours::findOrFail($id)->location->name;
        $tour->location=$location_name;

        //only once schedule shows specifi time
        if($tour->schedule_type=='once') {
            $startHourMin = date_format(date_create($tour->tour_start_time), 'Y/m/d H:i');
            $endHourMin = date_format(date_create($tour->tour_end_time), 'Y/m/d H:i');;
            $tour_duration = $startHourMin . ' - ' . $endHourMin;
            $tour->duration=$tour_duration;

            $tour->regular_dates='';
            $tour->regular_times='';

        }
        else{
            $tour->duration='';

            $tour_regular_dates=Tours::findOrFail($id)->regular_tour;

            $datesOpt=array();

            $regular_times=array();
            foreach($tour_regular_dates as $date)
            {
                $split_dates=explode(" ", $date->date);
                $dates=$split_dates[0].' '.$split_dates[1];
                $time=$split_dates[2];

                $datesOpt[$date->id]=$dates;
                $regular_times[$date->id]=$time;
            }

            $tour->regular_dates=$datesOpt;
            $tour->regular_times=$regular_times;
        }

        return view('front.tour.show',compact('tour'));

    }

    public function search(Request $request)
    {
        $location_id=$request->get('location');
        $tour_type=$request->get('tour_type');

        $query = DB::table('tours')->where('offShelf',0);

        if($location_id!='')
        {
            $query= $query->where('location_id', '=', $location_id);
        }

        if($tour_type!='')
        {
            $query=$query->where('tour_type',$tour_type);
        }

        $tours=$query->orderBy('tour_start_time', 'desc')->get();


        $locations=Locations::all();

        $locationOpt=array(''=>'-請選擇-');

        foreach($locations as $location)
        {
            $locationOpt[$location->id]=$location->name;
        }

        return view('front.tour.index',compact('tours','locationOpt'));

    }

}
