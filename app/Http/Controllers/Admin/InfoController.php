<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\aboutRequest;
use App\Http\Requests\indexInfoRequest;
use App\Http\Traits\MsgTrait;
use App\Overview;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\infoRequest;
use Intervention\Image\Facades\Image;

class InfoController extends Controller
{
    //use comman function
    use MsgTrait;
    //
    public function editIndexInfo()
    {
        $overview=Overview::all()->first();

        return view('admin.overview.indexInfo',compact('overview'));

    }

    public function editInfo()
    {
        $overview=Overview::all()->first();

        return view('admin.overview.info',compact('overview'));
    }

    public function editAboutUs()
    {
        $overview=Overview::all()->first();

        return view('admin.overview.about',compact('overview'));
    }

    public function editContact()
    {
        $overview=Overview::all()->first();

        return view('admin.overview.contact',compact('overview'));
    }


    public function updateInfo(infoRequest $request,$id)
    {

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');

            if ($file->isValid()) {
                $fileName = 'logo.png';
                $destinationPath = base_path() . '/public/images/';

                //whatever what kind of type , save to png
                //\Intervention\Image\Facades\Image::make($file)->save($destinationPath,$fileName);
                Image::make($file)->save($destinationPath . $fileName);
            }
        }
        //upload files

        if ($request->hasFile('favicon')) {

            $file = $request->file('favicon');

            if ($file->isValid()) {
                $fileName = 'favicon.ico';
                $destinationPath = base_path() . '/public/images/';
                $file->move($destinationPath, $fileName);
            }
        }

        Overview::find($id)->update($request->all());

        $this->succMsg($request,'Data updated');

        return redirect('admin/overview/info');
    }

    public function updateIndexInfo(Request $request,$id)
    {

        $destinationPath='';
        if ($request->hasFile('video_path')) {

            $file = $request->file('video_path');

            if ($file->isValid()) {
                $extension=$file->getClientOriginalExtension();

                $fileName = 'test2.'.$extension;
                $destinationPath = base_path() . '/public/video/';
                $file->move($destinationPath, $fileName);
                $overview=Overview::find($id);
                $overview->video_path=$fileName;
                $overview->save();

                $this->succMsg($request,'Data updated');

            }
        }
        else{
            $this->failMsg($request,'檔案上傳失敗');
        }

        return redirect('admin/overview/indexInfo');

    }

    public function updateAboutUs(aboutRequest $request,$id)
    {
        Overview::find($id)->update($request->all());
        $this->succMsg($request,'Data updated');

        return redirect('admin/overview/about');

    }

    public function updateContact(Request $request,$id)
    {
        Overview::find($id)->update($request->all());
        $this->succMsg($request,'Data updated');

        return redirect('admin/overview/contact');

    }

}
