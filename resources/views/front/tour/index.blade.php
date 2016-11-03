@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/inside.css')}}">

@stop

@section('content')

    <div id="tour">
        <div class="tourSearch">
            <div class="wrapper">
                {!! Form::open(['method'=>'POST', 'url'=>'tour/search']) !!}

                <div class="search-cell">
                    {{Form::label('location', '&nbsp;・區域&nbsp;')}}
                    {{Form::select('location',$locationOpt) }}
                </div>
                <div class="search-cell">
                    {{Form::label('tour_type', '&nbsp;・收費&nbsp;')}}
                    {{Form::select('tour_type', array(''=>'-請選擇-','free' => '免費導覽 Free Walk', 'charge' => '特別導覽 Special Walk')) }}
                </div>

                 {!! Form::submit('搜尋')!!}
                {{ Form::close() }}
            </div>
        </div>
        <div class="wrapper">
            <h2>導覽列表</h2>
            <ul>
                @foreach($tours as $tour)
                    <a href="{{url('tour/'.$tour->id)}}"><li><img src="{{url('images/tours/'.$tour->picture_list)}}"></li></a>
                @endforeach
            </ul>
        </div>
    </div>

@stop

@section('script')

    <script type="text/javascript" src="{{url('front/js/map.js')}}"></script>

    <script type="text/javascript">

        function tourHeight(){
            var w = $("#tour ul li").width(),
                    h = (w/375)*300;

            $("#tour li").css("height",h);
        }


        $(window).scroll(function(){
        });

        $(window).resize(function(){
            tourHeight();
        });

        $(document).ready(function(){
            tourHeight();
        });

    </script>
@stop

