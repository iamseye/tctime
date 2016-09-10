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

            {!! Form::open(array('url' => 'foo/bar')) !!}

                <div class="table">
                    <div class="table-row">
                        <div class="table-cell title">網站關鍵字</div>
                        <div class="table-cell">
                            <input type="text" name="" placeholder="請輸入關鍵字，並以逗號隔開" />
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">網站基本敘述</div>
                        <div class="table-cell">
                            <textarea></textarea>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">Logo</div>
                        <div class="table-cell">
                            <input type="file">
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">favicon</div>
                        <div class="table-cell">
                            <input type="file">
                        </div>
                    </div>

                </div>
                <div class="buttonArea">
                    <input type="submit" value="修改">
                </div>

            {!! Form::close() !!}


        </div>
    </div>
@stop