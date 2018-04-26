@extends('admin.layout.index') 
@section('title')
    Chi tiết loại tài khoản
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Loại tài khoản</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Tên loại tài khoản
                </dt>
                <dd>
                    {!!$loaitaikhoan->TenLoaiTaiKhoan!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/loaitaikhoan/edit/{!!$loaitaikhoan->id!!}">Sửa</a> |
        <a href="admin/loaitaikhoan/list">Danh sách</a>
    </div>

</section>
@endsection