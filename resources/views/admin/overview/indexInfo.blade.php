@extends('admin.layouts.mainLayout')

@section('content')


    @include('admin.layouts._subMenu')

    <div id="deatailArea">
        <ul id="path">
            <a href="./index.html"><li>後台</li></a>
            <a href="./info.html"><li>頁面資訊</li></a>
            <a href="./info.html"><li>網頁資訊</li></a>
        </ul>

        <div id="deatail">

            <form action="" method="">
                <div class="table">
                    <div class="table-row">
                        <div class="table-cell title">首頁影片</div>
                        <div class="table-cell">
                            <input type="text" name="" placeholder="請輸入影片網址" />
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">首頁標題</div>
                        <div class="table-cell">
                            <input type="text" name="" placeholder="請輸入標題" />
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">簡介</div>
                        <div class="table-cell">
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
@stop