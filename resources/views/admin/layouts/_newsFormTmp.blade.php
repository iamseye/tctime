
<div class="table">
    <div class="table-row">
        <div class="table-cell title">標題</div>
        <div class="table-cell">
            {!! Form::text('title', null,['placeholder'=>'請輸入標題']) !!}
        </div>
    </div>
    <div class="table-row">
        <div class="table-cell title">分類</div>
        <div class="table-cell">
            {{
                Form::select('category', array('note' => '消息文章', 'taichung' => '深旅文章'))
            }}
        </div>
    </div>
    <div class="table-row">
        <div class="table-cell title">內容</div>
        <div class="table-cell">
            {!! Form::textArea('content', null,['class'=>'mcetextarea']) !!}
        </div>
    </div>
</div>
