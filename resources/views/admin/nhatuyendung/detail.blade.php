@extends('admin.layout.index') 
@section('title')
    Chi tiết nhà tuyển dụng
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Nhà tuyển dụng</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                    Tên nhà tuyển dụng
                </dt>
                <dd>
                     {!!$nhatuyendung->TenNTD!!} 
                </dd>
                <dt>
                    Địa chỉ
                </dt>
                <dd>
                     {!!$nhatuyendung->DiaChi!!} 
                </dd>
                <dt>
                    Điện thoại
                </dt>
                <dd>
                     {!!$nhatuyendung->DienThoai!!} 
                </dd>
                <dt>
                    Email
                </dt>
                <dt>
                    Địa chỉ web
                </dt>
                <dd>
                     {!!$nhatuyendung->DiaChiWeb!!} 
                </dd>
                <dt>
                    Giới thiệu
                </dt>
                <dd>
                     {!!$nhatuyendung->GioiThieu!!} 
                </dd>
                <dt>
                    Tên tài khoản
                    </dt>
                    <dd>
                         {!!$nhatuyendung->MaTaiKhoan!!} 
                    </dd>
                <dt>
                    Hình ảnh
                </dt>
                <dd>
                     <img src="imageNTD/{!!$nhatuyendung->HinhAnh!!}" width="300px" height="200px" alt=""> 
                </dd>
               
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/nhatuyendung/edit/{!!$nhatuyendung->id!!}">Sửa</a> |
        <a href="admin/nhatuyendung/list">Danh sách</a>
    </div>

</section>
@endsection