@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/inside.css')}}">
@stop

@section('content')


    <div id="order">
        <h2>導覽名稱</h2>

        <img src="{{url('images/tourBanner.jpg')}}" />

        {!! Form::open(['method'=>'POST', 'url'=>'/booking']) !!}
            <input id="tours_id" name="tours_id" type="hidden" value="{{$booking->tour_id}}"/>

        <ul id="orderList">
                <li>
                    <div class="orderItem">姓名 Name</div>
                    <div class="orderItem">
                            {{Form::text('name')}}
                    </div>
                </li>
                <li>
                    <div class="orderItem">國家 Nationality</div>
                    <div class="orderItem">
                        {{Form::text('nationality')}}
                    </div>
                </li>
                <li>
                    <div class="orderItem">參加日期 Date</div>
                    <div class="orderItem">
                        {{$booking->date}}
                        <input id='regular_dates_id' name="regular_dates_id" type="hidden" value="{{$booking->regular_dates_id}}"/>
                    </div>
                </li>

                <li>
                    <div class="orderItem">連絡電話 Phone</div>
                    <div class="orderItem">
                        {{Form::text('phone')}}
                    </div>
                </li>

                <li>
                    <div class="orderItem">信箱 Email</div>
                    <div class="orderItem">
                        {{Form::text('email')}}
                    </div>
                </li>
                <li>
                    <div class="orderItem">年齡 Age</div>
                    <div class="orderItem">
                        {{Form::select('ages_id',$booking->ageOpt)}}

                    </div>
                </li>
            </ul>
            <div id="orderBTN">
                <input type="reset" value="清除">
                {!! Form::submit('確認預約',['class'=>'btn'])!!}
            </div>

        {{ Form::close() }}
    </div>

@stop

@section('script')

@stop

