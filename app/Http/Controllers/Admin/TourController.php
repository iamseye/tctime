<?php

namespace App\Http\Controllers\Admin;

use App\Locations;
use App\RegularDates;
use App\RegularTours;
use App\Tours;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Traits\MsgTrait;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class TourController extends Controller
{
    use MsgTrait;
    //
    public function index()
    {
        $tours=Tours::orderBy('offShelf', 'asc')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.tour.index',compact('tours'));
    }

    public function create()
    {
        $items = Locations::pluck('name', 'id');

        return view('admin.tour.create',compact('items'));
    }

    public function store(Requests\creaetTourRequest $request)
    {
        if($request->get('schedule_type')=='regular')
        {
            $tour=Tours::create($request->all());

            if ($request->hasFile('picture')) {

                $file = $request->file('picture');

                if ($file->isValid()) {
                    $extension=$file->getClientOriginalExtension();

                    $fileName = 'R'.$tour->id.'_'.time().'.'.$extension;
                    $destinationPath = base_path() . '/public/images/tours/';
                    Image::make($file)->save($destinationPath . $fileName);
                }
            }

            if ($request->hasFile('picture_list')) {

                $file = $request->file('picture_list');

                if ($file->isValid()) {
                    $extension=$file->getClientOriginalExtension();

                    $list_fileName = 'List_R'.$tour->id.'_'.time().'.'.$extension;
                    $destinationPath = base_path() . '/public/images/tours/';
                    Image::make($file)->save($destinationPath . $list_fileName);
                }
            }


            //count which dates have to create tours
            $end_date=$request->get('tour_end_time');
            $start_date=$request->get('tour_start_time');
            $tour_end_date_time=strtotime($end_date);
            $tour_start_date_time=strtotime($start_date);

            //regular weeks and time
            $weeks=$request->get('week');
            $weeks_start=$request->get('start_time');
            $weeks_end=$request->get('end_time');

            $weekStr='';


            for($j=0;$j<sizeof($weeks);$j++)
            {
                for($i = strtotime($weeks[$j], $tour_start_date_time); $i <= $tour_end_date_time; $i = strtotime('+1 week', $i))
                {
                    $regular_week_date= date('Y-m-d', $i);

                    $week_start_H_m=date_format(date_create($weeks_start[$j]), 'H:i');
                    $week_end_H_m=date_format(date_create($weeks_end[$j]), 'H:i');

                    //combine date and time
                    $tour_all_dates=$regular_week_date.' ('.$weeks[$j].') '.($week_start_H_m).'-'.($week_end_H_m);

                    $regular_dates= new RegularDates();
                    $regular_dates->date=$tour_all_dates;
                    $regular_dates->tours_id=$tour->id;
                    $regular_dates->save();

                }

                $weekStr=$weekStr.$weeks[$j].',';
            }

            $tour->picture=$fileName;
            $tour->picture_list=$list_fileName;

            $tour->weeks=$weekStr;
            $tour->save();

        }
        else
        {
            $tour_end_time=$request->get('once_tour_end_time');
            $tour_start_time=$request->get('once_tour_start_time');

            $tour=Tours::create($request->all());

            $tour->tour_start_time=date('Y-m-d H:i:s',strtotime($tour_start_time));
            $tour->tour_end_time=date('Y-m-d H:i:s',strtotime($tour_end_time));

            if ($request->hasFile('picture')) {

                $file = $request->file('picture');

                if ($file->isValid()) {
                    $extension=$file->getClientOriginalExtension();

                    $fileName = 'O'.$tour->id.'_'.time().'.'.$extension;
                    $destinationPath = base_path() . '/public/images/tours/';
                    Image::make($file)->save($destinationPath . $fileName);
                }
            }


            if ($request->hasFile('picture_list')) {

                $file = $request->file('picture_list');

                if ($file->isValid()) {
                    $extension=$file->getClientOriginalExtension();

                    $list_fileName = 'List_O'.$tour->id.'_'.time().'.'.$extension;
                    $destinationPath = base_path() . '/public/images/tours/';
                    Image::make($file)->save($destinationPath . $list_fileName);
                }
            }

            $tour->picture=$fileName;
            $tour->picture_list=$list_fileName;
            $tour->save();
        }

        return redirect('admin/tour');
    }

    public function show($id)
    {
        $tour=Tours::findorFail($id);
        $items = Locations::pluck('name', 'id');

        if($tour->schedule_type=='regular')
        {
            $regular_dates=$tour->regular_tour;
            $once_date='';
        }
        else
        {
            $regular_dates='';
            $startHourMin = date_format(date_create($tour->tour_start_time), 'Y/m/d H:i');
            $endHourMin = date_format(date_create($tour->tour_end_time), 'Y/m/d H:i');
            $once_date=$startHourMin . ' - ' . $endHourMin;
        }

        return view('admin.tour.edit',compact('tour','items','regular_dates','once_date'));
    }

    public function update(Request $request, $id)
    {
        Tours::find($id)->update($request->all());
        $tour=Tours::find($id);


        if ($request->hasFile('picture')) {

            $file = $request->file('picture');

            if ($file->isValid()) {
                $extension=$file->getClientOriginalExtension();

                $fileName = 'R'.$id.'_'.time().'.'.$extension;
                $destinationPath = base_path() . '/public/images/tours/';
                Image::make($file)->save($destinationPath . $fileName);
            }

            $tour->picture=$fileName;

        }

        if ($request->hasFile('picture_list')) {

            $file = $request->file('picture_list');

            if ($file->isValid()) {
                $extension=$file->getClientOriginalExtension();

                $list_fileName = 'List_R'.$id.'_'.time().'.'.$extension;
                $destinationPath = base_path() . '/public/images/tours/';
                Image::make($file)->save($destinationPath . $list_fileName);
            }

            $tour->picture_list=$list_fileName;

        }

        $tour->save();

        $this->succMsg($request,'Data updated');

        return redirect('admin/tour');

    }

    public function search(Request $request)
    {

        $title = $request->get('title');
        $tour_type=$request->get('tour_type');
        $schedule_type=$request->get('schedule_type');
        $range_dates=$request->get('range_dates');

        $query = DB::table('tours');

        if($title!='')
        {
            $query= $query->where('title', 'LIKE', '%'.$title.'%');
        }

        if($tour_type!='')
        {
            $query=$query->where('tour_type',$tour_type);
        }

        if($schedule_type!='')
        {
            $query=$query->where('schedule_type',$schedule_type);
        }

        if($range_dates!='')
        {
            $range_dates=explode("~", $range_dates);
            $start_date=$range_dates[0];
            $end_date=$range_dates[1];
            $query=$query->where('tour_start_time','>=',$start_date)
                         ->where('tour_start_time','<=',$end_date);
        }

        $tours=$query->orderBy('tour_start_time', 'desc')->paginate(10);


        return view('admin.tour.index',compact('tours'));

    }

    public function booking($tour_id)
    {
        $bookings=Tours::find($tour_id)->bookings()->paginate(10);;

        return view('admin.booking.index',compact('bookings'));
    }
}
