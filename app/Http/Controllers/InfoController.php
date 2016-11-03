<?php

namespace App\Http\Controllers;

use App\Overview;
use Illuminate\Http\Request;

use App\Http\Requests;

class InfoController extends Controller
{
    //get about information
    public function about()
    {
        $info=Overview::first();

        return view('front.about',compact('info'));
    }
}
