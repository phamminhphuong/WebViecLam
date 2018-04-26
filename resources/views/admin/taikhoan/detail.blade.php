@extends('admin.layout.index') 
@section('title')
    Chi tiết tài khoản
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Tài khoản</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Email
                </dt>
                <dd>
                    {!!$taikhoan->email!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Mật khẩu
                </dt>
                <dd>
                    {!!$taikhoan->password!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Loại tài khoản
                </dt>
                <dd>
                    {!!$taikhoan->loaitaikhoan->TenLoaiTaiKhoan!!}
                </dd>
            </dl>
        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/taikhoan/edit/{!!$taikhoan->id!!}">Sửa</a> |
        <a href="admin/taikhoan/list">Danh sách</a>
    </div>
</section>
@endsection