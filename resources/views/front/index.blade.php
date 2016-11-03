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
                    <a href="./tour_inside.html"><li><img src="{{url('images/tours/'.$tour->picture_list)}}"></li></a>
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

    <div id="map">
        <div class="mapWrapper">
            <h2>導覽地圖</h2>
            <ul id="mapArea">
                <li id="a01"><span>舊城區</span></li>
                <li id="a02"><span>中西區</span></li>
                <li id="a03"><span>草悟道區</span></li>
                <li id="a04"><span>南屯區</span></li>
                <li id="a05"><span>霧峰區</span></li>
            </ul>
            <ul id="mapList">

                <li>
                    <div class="title">舊城區 Downtown</div>
                    @foreach($downtowns as $downtown)
                        <a href="./tour_inside.html"><img src="{{url('images/tours/'.$downtown->picture_list)}}"></a>
                    @endforeach
                    <a class="moreTour" href="./tour.html"></a>
                </li>
                <li>
                    <div class="title">中西區 MidWest</div>
                    @foreach($midWests as $midWest)
                        <a href="./tour_inside.html"><img src="{{url('images/tours/'.$midWest->picture_list)}}"></a>
                    @endforeach
                    <a class="moreTour" href="./tour.html"></a>
                </li>
                <li>
                    <div class="title">草悟道區 Calligraphy Path</div>
                    @foreach($calligraphies as $calligraphy)
                        <a href="./tour_inside.html"><img src="{{url('images/tours/'.$calligraphy->picture_list)}}"></a>
                    @endforeach
                    <a class="moreTour" href="./tour.html"></a>
                </li>
                <li>
                    <div class="title">南屯區 Nantun</div>
                    @foreach($nantuns as $nantun)
                        <a href="./tour_inside.html"><img src="{{url('images/tours/'.$nantun->picture_list)}}"></a>
                    @endforeach
                    <a class="moreTour" href="./tour.html"></a>
                </li>
                <li>
                    <div class="title">霧峰區 Wufang</div>
                    @foreach($wufangs as $wufang)
                        <a href="./tour_inside.html"><img src="{{url('images/tours/'.$wufang->picture_list)}}"></a>
                    @endforeach
                    <a class="moreTour" href="./tour.html"></a>
                </li>
            </ul>
        </div>
    </div>
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