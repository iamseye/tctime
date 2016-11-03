@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/inside.css')}}">

@stop

@section('content')

    <div id="tourInside">
        <div id="tourPhoto">
            <img src="{{url('images/tours/'.$tour->picture)}}" />
        </div>
        <div id="tourText">
            <h2>{{$tour->title}}</h2>
            {!! $tour->description !!}
            <ul>
                <li><div class="tourTitle">區域 Area</div>{{$tour->location}}</li>

                <li><div class="tourTitle">集合地點 Location</div>{{$tour->meeting_point}}</li>

                {!! Form::open(['method'=>'POST', 'url'=>'tour/booking']) !!}
                @if($tour->schedule_type=='regular')
                <li>
                    {{Form::label('regular_dates','日期 Dates',['class'=>'tourTitle'])}}
                    <div class="orderItem">
                        {{Form::select('regular_dates',$tour->regular_dates)}}
                    </div>
                    <input id='regular_times' type="hidden" value="{{json_encode($tour->regular_times)}}"/>
                </li>
                @endif

                @if($tour->schedule_type=='once')
                    <li><div class="tourTitle">活動時間 Time</div>{{$tour->duration}}</li>
                @else
                    <li><div class="tourTitle">活動時間 Time</div><div id="showTime"></div></li>

                @endif

            </ul>
            <div id="price">
                NT <span>{{$tour->price}}</span>
            </div>
            <div id="orderArea">
                {{ Form::hidden('tour_id', $tour->id) }}

                {!! Form::submit('立即預約',['class'=>'btn'])!!}
                {{ Form::close() }}

            </div>
        </div>
    </div>

    <div id="tourContent">
        <div class="wrapper">
            <h2>導覽資訊</h2>
            {!! $tour->content !!}
            <img />
        </div>
    </div>


@stop

@section('script')

    <script>
        $( document ).ready(function(){
            $times_seril_array=$('#regular_times').val();
            $time_array=JSON.parse($times_seril_array);

            $("#regular_dates").change(function () {
                var regular_dates_id = this.value;
                console.log(regular_dates_id);
                $('#showTime').text($time_array[regular_dates_id]);
            });
        });
    </script>
@stop

