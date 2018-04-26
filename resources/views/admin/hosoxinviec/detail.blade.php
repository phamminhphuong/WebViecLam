@extends('admin.layout.index') 
@section('title')
    Chi tiết hồ sơ xin việc
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Hồ sơ xin việc</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                   Mã hồ sơ
                </dt>
                <dd>
                     {!!$hosoxinviec->id!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Mã tài khoản
                </dt>
                <dd>
                     {!!$hosoxinviec->MaTaiKhoan!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Chuyên ngành
                </dt>
                <dd>
                     {!!$hosoxinviec->chuyennganh->TenNganh!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Trình độ
                </dt>
                <dd>
                     {!!$hosoxinviec->trinhdo->TenTrinhDo!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Chứng chỉ
                </dt>
                <dd>
                     {!!$hosoxinviec->chungchi->TenChungChi!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                    Tiêu đề
                </dt>
                <dd>
                     {!!$hosoxinviec->TieuDe!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Họ tên
                </dt>
                <dd>
                     {!!$hosoxinviec->HoTen!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Ngày sinh
                </dt>
                <dd>
                     {!!$hosoxinviec->NgaySinh!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Giới tính
                </dt>
                <dd>
                    @if($hosoxinviec->GioiTinh==1)
                        {!!"Nam"!!}
                    @else
                        {!!"Nữ"!!}
                    @endif
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Địa chỉ
                </dt>
                <dd>
                     {!!$hosoxinviec->DiaChi!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Điện thoại
                </dt>
                <dd>
                     {!!$hosoxinviec->DienThoai!!} 
                </dd>
            </dl>
           
            <dl class="dl-horizontal">
                <dt>
                   Tình trạng hôn nhân
                </dt>
                <dd>
                     {!!$hosoxinviec->TinhTrangHonNhan!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Lương khởi điểm
                </dt>
                <dd>
                     {!!$hosoxinviec->LuongKhoiDiem!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Nơi làm việc
                </dt>
                <dd>
                     {!!$hosoxinviec->NoiLamViec!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Kinh nghiệm
                </dt>
                <dd>
                     {!!$hosoxinviec->KinhNghiem!!} 
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Hình ảnh
                </dt>
                <dd>
                     <img src="image_HoSo/{!!$hosoxinviec->HinhAnh!!}" width="300px" height="200px" alt="">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Nguyện vọng làm việc
                </dt>
                <dd>
                     {!!$hosoxinviec->NguyenVongLamViec!!} 
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/hosoxinviec/edit/{!!$hosoxinviec->id!!}">Sửa</a> |
        <a href="admin/hosoxinviec/list">Danh sách</a>
    </div>

</section>
@endsection