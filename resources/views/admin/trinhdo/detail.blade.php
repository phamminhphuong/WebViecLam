@extends('admin.layout.index') 
@section('title')
    Chi tiết trình độ
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Trình độ</h3>
        </div>
        <div class="box-header with-border">
            <h4>Trình độ</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Tên trình độ
                </dt>
                <dd>
                    {!!$trinhdo->TenTrinhDo!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/trinhdo/edit/{!!$trinhdo->id!!}">Sửa</a> |
        <a href="admin/trinhdo/list">Danh sách</a>
    </div>
</section>
@endsection