<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html>

<head>
    <title>TC TimeWalk後台管理系統</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <link rel="icon" href="./images/favicon.ico" type="image/ico">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="./css/inside.css">
    <link rel="stylesheet" type="text/css" href="./css/base.css">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <script type="text/javascript" src="./js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="./js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/menu.js"></script>
    <script type="text/javascript" src="./js/content.js"></script>
    <script type="text/javascript">

        $(window).scroll(function(){
        });

        $(window).resize(function(){
        });

        $(document).ready(function(){
        });


    </script>

</head>

<body>

<div id="wrapper">

    <div id="header" class="shadow">
        <ul id="accountBox" class="wrapper">
            <a href=""><li>登出</li></a>
            <a href=""><li>網頁前台</li></a>
        </ul>
        <div class="wrapper">
            <img id="logo" src="./images/logo.png" />
            <h1>TC TimeWalk 後台管理系統</h1>
            <ul id="mainMenu">
                <a href="./index.html"><li>總覽</li></a>
                <a href="./info.html"><li class="this">頁面資訊</li></a>
                <a href="./tour.html"><li>導覽管理</li></a>
                <a href="./order.html"><li>預約表單</li></a>
                <a href="./news.html"><li>最新消息</li></a>
                <a href="./guestbook.html"><li>查看留言</li></a>
            </ul>
        </div>
    </div>

    <div id="content" class="wrapper">
        <div id="subMenuArea">
            <ul id="subMenu">
                <a href="./info.html"><li>網頁資訊</li></a>
                <a href="./page.html"><li>首頁</li></a>
                <a href="./about.html"><li class="this">關於我們</li></a>
            </ul>
        </div>
        <div id="deatailArea">
            <ul id="path">
                <a href="./index.html"><li>後台</li></a>
                <a href="./info.html"><li>頁面資訊</li></a>
                <a href="./about.html"><li>關於我們</li></a>
            </ul>
            <div id="deatail">

                <form action="" method="">
                    <div class="cross">
                        <div class="cross-row">
                            <div class="cross-cell title">理念故事</div>
                            <div class="cross-cell">
                                <textarea></textarea>
                            </div>
                        </div>

                        <div class="cross-row">
                            <div class="cross-cell title">團隊成員</div>
                            <div class="cross-cell">
                                <textarea></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="buttonArea">
                        <input type="submit" value="修改">
                    </div>
                </form>


            </div>
        </div>
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

</body>

<script type="text/javascript" src="./js/load.js"></script>

</html>