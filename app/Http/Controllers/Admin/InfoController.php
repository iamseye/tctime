<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    //
    //

    public function editInfo()
    {
        return view('admin.overview.info');

    }

    public function editIndexInfo()
    {
        return view('admin.overview.indexInfo');

    }

    public function editAboutUs()
    {
        return view('admin.overview.about');

    }


    public function updateInfo()
    {

    }

    public function updateIndexInfo()
    {

    }

    public function updateAboutUs()
    {

    }
}
