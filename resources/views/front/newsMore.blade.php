@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/inside.css')}}">

@stop

@section('content')

    <div id="news">
        <div class="wrapper">
            <h3>{{$news->title}}</h3>
            <div id="content">
            {!! $news->content !!}
            </div>
        </div>
        <ul id="page">
            <a href="{{ url()->previous() }}"><li>返回</li></a>
        </ul>
    </div>

    </div>

@stop

