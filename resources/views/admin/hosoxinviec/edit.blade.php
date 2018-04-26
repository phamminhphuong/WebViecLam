@extends('admin.layout.index') 
@section('title') 
Sửa hồ sơ xin việc
@endsection
 @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa hồ sơ xin việc</h3>
        </div>
        <div class="box-header with-border">
            <h4>Hồ sơ xin việc</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er) {{$er}}
            <br> @endforeach
        </div>
        @endif
        <br>
        <form action="admin/hosoxinviec/edit/{!!$hosoxinviec->id!!}" enctype="multipart/form-data" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2">Mã tài khoản</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaTaiKhoan" name="MaTaiKhoan">
                            @foreach($taikhoan as $tk)
                            <option @if($tk->id==$hosoxinviec->MaTaiKhoan) {!!"selected"!!}@endif value="{!!$tk->id!!}">{!!$tk->TenTaiKhoan!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Chuyên ngành</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaNganh" name="MaNganh">
                            @foreach($chuyennganh as $cn)
                            <option @if($cn->id==$hosoxinviec->MaNganh) {!!"selected"!!}@endif value="{!!$cn->id!!}">{!!$cn->TenNganh!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Trình độ</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaTrinhDo" name="MaTrinhDo">
                            @foreach($trinhdo as $td)
                            <option @if($td->id==$hosoxinviec->MaTrinhDo) {!!"selected"!!}@endif value="{!!$td->id!!}">{!!$td->TenTrinhDo!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Chứng chỉ</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaChungChi" name="MaChungChi">
                            @foreach($chungchi as $cc)
                            <option @if($cc->id==$hosoxinviec->MaCC) {!!"selected"!!}@endif value="{!!$cc->id!!}">{!!$cc->TenChungChi!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Tiêu đề</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="{!!$hosoxinviec->TieuDe!!}" placeholder="Nhập tiêu đề">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Họ tên</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="HoTen" name="HoTen" type="text" value="{!!$hosoxinviec->HoTen!!}" placeholder="Nhập họ tên">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Ngày sinh </b>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="NgaySinh" value="{!!$hosoxinviec->NgaySinh!!}">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Giới tính</b>
                    <div class="col-md-10">
                        <select class="form-control" id="GioiTinh" name="GioiTinh">
                            <option @if($hosoxinviec->GioiTinh==1) {!!"selected"!!} @endif value="1">Nam</option>
                            <option @if($hosoxinviec->GioiTinh==0) {!!"selected"!!} @endif value="0">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Địa chỉ</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DiaChi" name="DiaChi" type="text" value="{!!$hosoxinviec->DiaChi!!}" placeholder="Nhập địa chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Điện thoại</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DienThoai" name="DienThoai" type="text" value="{!!$hosoxinviec->DienThoai!!}" placeholder="Nhập điện thoại">
                    </div>
                </div>
               
                <div class="form-group">
                    <b class="control-label col-md-2">Tình trạng hôn nhân</b>
                    <div class="col-md-10">
                        <input type="text" name="TinhTrangHonNhan" class="form-control" value="{!!$hosoxinviec->TinhTrangHonNhan!!}" placeholder="Nhập tình trạng hôn nhân">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Mức lương mong muốn</b>
                    <div class="col-md-10">
                        <input type="number" name="LuongKhoiDiem" class="form-control" value="{!!$hosoxinviec->LuongKhoiDiem!!}">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Nơi làm việc</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="NoiLamViec" name="NoiLamViec" type="text" value="{!!$hosoxinviec->NoiLamViec!!}" placeholder="Nhập nơi làm việc mong muốn">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Kinh nghiệm</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="KinhNghiem" name="KinhNghiem" type="text" value="{!!$hosoxinviec->KinhNghiem!!}" placeholder="Nhập kinh nghiệm">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Hình ảnh</b>
                    <div class="col-md-10">
                        <img src="image_HoSo/{!!$hosoxinviec->HinhAnh!!}" width="300px" height="200px"  alt=""><br><br>
                        <input type="file" name="HinhAnh" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Nguyện vọng làm việc</b>
                    <div class="col-md-10">
                        <textarea name="NguyenVongLamViec" id="NguyenVongLamViec">{!!$hosoxinviec->NguyenVongLamViec!!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Sửa" class="btn btn-primary">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
    </form>
    </div>
    <div class="box-footer">
        <a href="admin/hosoxinviec/list">Danh sách</a>
    </div>
</section>
@endsection @section('script')
<script>
    CKEDITOR.replace('NguyenVongLamViec');
</script> @endsection