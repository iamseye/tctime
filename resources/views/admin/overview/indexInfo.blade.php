@extends('admin.layouts.mainLayout')

@section('content')


    @include('admin.layouts._subMenu')

    <div id="deatailArea">

        {!! Breadcrumbs::render('indexInfo') !!}

        @include('layouts._errorMsg')

        <div id="deatail">

            {!! Form::model($overview,['method'=>'PATCH', 'url'=>'admin/overview/indexInfo/update/'.$overview->id,'files'=>true]) !!}

            <div class="table">
                <div class="table-row">
                    <div class="table-cell title">首頁影片</div>
                    <div class="table-cell">
                        {!! Form::file('video_path',null) !!}
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