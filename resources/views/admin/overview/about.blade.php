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
@stop