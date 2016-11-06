@extends('front.layouts.mainLayout')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('front/css/index.css')}}">
@stop

@section('content')

    <div id="recentTour">
        <div class="wrapper">
            <img id="tourImg_01" src="./images/tourImg_01.png" />
            <img id="tourImg_02" src="./images/tourImg_02.png" />
            <h2>熱門導覽</h2>
            <ul>
                @foreach($tours as $tour)
                    <a href="{{url('tour/'.$tour->id)}}"><li><img src="{{url('images/tours/'.$tour->picture_list)}}"></li></a>
                @endforeach
            </ul>
            <a href="{{url('/tour')}}" class="more">更多導覽</a>
        </div>
    </div>

    <div id="indexAbout">
        <div class="wrapper">
            <h2>台中在地生活導覽</h2>
            <div class="content">
                <img src="./images/aboutPhoto.png"/>
                <img id="aboutImg_01" src="./images/aboutImg.png" />
                <p>
                    TC Time Walk團隊是由一群熱愛台中在地生活的年輕人所組成。藉由「走路說故事」的方式帶給來自外國、外地、本地的旅人，認識深度的台中城區人文歷史、建築、河流…等，並以各區塊特色的不同，設計僅屬於此區域的獨家導覽。快來用足跡喚醒全身對都市的脈絡記憶，來一次深度旅行讓你對台中之美終身不會忘記。
                </p>
            </div>
            <a href="{{url('/about')}}" class="more">閱讀更多</a>
        </div>
    </div>

    @include('front.layouts._map')
@stop

@section('script')

    <script type="text/javascript" src="{{url('front/js/jquery.vide.min.js')}}"></script>
    <script type="text/javascript" src="{{url('front/js/header.js')}}"></script>
    <script type="text/javascript" src="{{url('front/js/map.js')}}"></script>


    <script type="text/javascript">

        function tourHeight(){
            var w = $("#recentTour ul li").width(),
                    h = (w/375)*300;

            $("#recentTour li").css("height",h);
        }

        function scrollDown(){
            $("#scroll").click(function(){
                $('html,body').animate({scrollTop:$("#recentTour").offset().top},350);
            });
        }


        $(window).scroll(function(){
        });

        $(window).resize(function(){
            tourHeight();
        });

        $(document).ready(function(){
            tourHeight();
            scrollDown();


        });
    </script>



@stop