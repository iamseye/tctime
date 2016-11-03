@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/inside.css')}}">
@stop

@section('content')
    <div id="news">
        <div class="wrapper">
            <h2>{{$newsTitle}}</h2>

            <ul id="newsList">
                @foreach($news as $new)
                <li>
                    <div class="date">{{ date_format($new->created_at,'Y-m-d')}}</div>
                    <h3 class="title">{{$new->title}}</h3>
                    {!! $new->content !!}

                    <a href="{{ url('news/'.$new->id) }}" class="btn">閱讀更多</a>

                </li>
                @endforeach

            </ul>

            @include('front.layouts._pagination',['paginator' => $news])

        </div>
    </div>

@stop


