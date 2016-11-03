<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>

<head>
    <title>TC Time Walk</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}">
    <link rel="icon" href="{{url('images/favicon.ico')}}" type="image/ico">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/base.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('front/css/reset.css')}}">

    @yield('css')

</head>

<body>

<div id="wrapper">
    <div id="header" data-vide-bg="video/test2" data-vide-options="loop: true, muted: false, position: 0% 0%">
        <ul id="social">
            <a target="_blank" href="http://www.facebook.com/tctimewalk"><li>English</li></a>
            <a href=""><li><img src="{{url('images/s_01.png')}}" /></li></a>
            <a href=""><li><img src="{{url('images/s_02.png')}}" /></li></a>
            <a href=""><li><img src="{{url('images/s_03.png')}}" /></li></a>
        </ul>
        <div id="headerText">
            <a href="{{url('/')}}"><img id="logo" src="{{url('images/logo.png')}}" /></a>
            <h1>台中時空漫步</h1>
            <p>
                The Best City Walk in Taichung
            </p>
        </div>
        <ul id="mainMenu">

            @include('front.layouts._mainMenu')

            <li id="scroll"><img src="{{url('images/scroll.png')}}"></li>
        </ul>
    </div>


    @yield('content')

    @include('front.layouts._footer')


</div>

<ul id="BgMenu">
    @include('front.layouts._mainMenu')

</ul>

<div id="openMenu">
    <div id="openMenuBefore"></div>
    <div id="openMenuAfter"></div>
</div>

<div id="closeMenu"></div>


<script type="text/javascript" src="{{url('front/js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{url('front/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('front/js/menu.js')}}"></script>
<script type="text/javascript" src="{{url('front/js/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('front/js/load.js')}}"></script>

@yield('script')


</body>


</html>