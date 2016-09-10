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
                            {!! Form::text('keyword', null, ['placeholder'=>'請輸入關鍵字，並以逗號隔開']) !!}
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">網站基本敘述</div>
                        <div class="table-cell">
                            {!! Form::textarea('description', null) !!}
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">Logo</div>
                        <div class="table-cell">
                            {!! Form::file('logo', null) !!}
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell title">favicon</div>
                        <div class="table-cell">
                            {!! Form::file('favicon', null) !!}
                        </div>
                    </div>

                </div>
                <div class="buttonArea">
                    {!! Form::submit('修改')!!}
                </div>

            {!! Form::close() !!}


        </div>
    </div>
@stop