@extends('admin.layout.index') 
@section('title')
    Chi tiết chuyên ngành
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Chuyên ngành</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Tên ngành
                </dt>
                <dd>
                    {!!$chuyennganh->TenNganh!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/chuyennganh/edit/{!!$chuyennganh->id!!}">Sửa</a> |
        <a href="admin/chuyennganh/list">Danh sách</a>
    </div>

</section>
@endsection