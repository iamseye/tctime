@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/inside.css')}}">

@stop

@section('content')

    <div id="about">
        <div class="wrapper">
            <h2>關於 ABOUT</h2>
            <div class="content">
                {!! $info->about !!}

            </div>
        </div>
    </div>


@stop

@section('script')

@stop

