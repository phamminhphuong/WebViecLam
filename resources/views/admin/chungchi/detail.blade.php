@extends('admin.layout.index') 
@section('title')
    Chi tiết chứng chỉ
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Chứng chỉ</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Tên chứng chỉ
                </dt>
                <dd>
                    {!!$chungchi->TenChungChi!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Nơi cấp
                </dt>
                <dd>
                    {!!$chungchi->NoiCap!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/chungchi/edit/{!!$chungchi->id!!}">Sửa</a> |
        <a href="admin/chungchi/list">Danh sách</a>
    </div>
</section>
@endsection