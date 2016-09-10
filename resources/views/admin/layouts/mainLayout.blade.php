<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>

<head>
    <title>TC TimeWalk後台管理系統</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}">
    <link rel="icon" href="{{url('images/favicon.ico')}}" type="image/ico">
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/table.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/inside.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/reset.css')}}">

@yield('css')

</head>

<body>

<div id="wrapper">

    <div id="header" class="shadow">
        <ul id="accountBox" class="wrapper">
            <a href=""><li>登出</li></a>
            <a href=""><li>網頁前台</li></a>
        </ul>
        <div class="wrapper">
            <img id="logo" src="{{url('images/logo.png')}}" />
            <h1>TC TimeWalk 後台管理系統</h1>
            <ul id="mainMenu">
                <a href="{{url('admin/')}}"><li>總覽</li></a>
                <a href="{{url('admin/overview/')}}"><li class="this">頁面資訊</li></a>
                <a href="./tour.html"><li>導覽管理</li></a>
                <a href="./order.html"><li>預約表單</li></a>
                <a href="./news.html"><li>最新消息</li></a>
                <a href="./guestbook.html"><li>查看留言</li></a>
            </ul>
        </div>
    </div>

    <div id="content" class="wrapper">
        @yield('content')
    </div>


    <div id="footer">
			<span id="copyright">
				© 2016. CircleStudio 圓設計工作室. All rights reserved
			</span>
    </div>
</div>

<div id="BgMenu">
    <ul id="footerMenu">
        <a href="./index.html"><li>總覽</li></a>
        <a href="./info.html"><li class="this">頁面資訊</li></a>
        <a href="./tour.html"><li>導覽管理</li></a>
        <a href="./order.html"><li>預約表單</li></a>
        <a href="./news.html"><li>最新消息</li></a>
        <a href="./guestbook.html"><li>查看留言</li></a>
    </ul>
</div>

<div id="openMenu">
    <div id="openMenuBefore"></div>
    <div id="openMenuAfter"></div>
</div>

<div id="closeMenu"></div>

<script type="text/javascript" src="{{url('js/jquery-1.10.2.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/menu.js')}}"></script>
<script type="text/javascript" src="{{url('js/content.js')}}"></script>

@yield('script')

</body>

</html>