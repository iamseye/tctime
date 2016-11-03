<?php

namespace App\Http\Controllers;

use App\Tours;
use Illuminate\Http\Request;

use App\Http\Requests;

class indexController extends Controller
{
    //
    public function index()
    {

        $tours=Tours::orderBy('tour_start_time', 'asc')->take(6)->get();

        $downtowns=Tours::where('location_id', '1')->take(3)->get();
        $midWests=Tours::where('location_id', '4')->take(3)->get();
        $calligraphies=Tours::where('location_id', '3')->take(3)->get();
        $nantuns=Tours::where('location_id', '2')->take(3)->get();
        $wufangs=Tours::where('location_id', '5')->take(3)->get();

        return view('front.index',compact('tours','downtowns','midWests','calligraphies','nantuns','wufangs'));
    }
}
