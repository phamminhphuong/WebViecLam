@extends('admin.layout.index') 
@section('title') Chi tiết tài khoản
@endsection
 
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er) {{$er}}
            <br> @endforeach
        </div>
        @endif @if(!empty($messageSuccess))
        <div class="alert alert-success">
            {!!$messageSuccess!!}
        </div>
        @endif
        <div class="box-header">
            <h4>Cập nhật mật khẩu</h4>
        </div>
        <form action="admin/taikhoan/change-password" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Mật khẩu mới </b>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Nhập lại mật khẩu </b>
                    <div class="col-md-10">
                        <input type="password" class="form-control" name="repassword">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Cập nhật" class="btn btn-primary">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </form>
        <hr>


        <div class="box-header">
            <h4>Thông tin cá nhân</h4>
        </div>
        
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Họ tên</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="HoTen" name="HoTen" type="text" value="{!!empty($hoso)?'':$hoso->HoTen!!}" placeholder="Nhập họ tên">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Ngày sinh </b>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="NgaySinh" value="{!!empty($hoso)?'':$hoso->NgaySinh!!}">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Giới tính</b>
                    <div class="col-md-10">
                        <select class="form-control" id="GioiTinh" name="GioiTinh">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Địa chỉ</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DiaChi" name="DiaChi" type="text" value="{!!empty($hoso)?'':$hoso->DiaChi!!}" placeholder="Nhập địa chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Điện thoại</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="DienThoai" name="DienThoai" type="text" value="{!!empty($hoso)?'':$hoso->DienThoai!!}"
                            placeholder="Nhập điện thoại">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Hình ảnh</b>
                    <div class="col-md-10">
                        <input type="file" name="HinhAnh" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Cập nhật" class="btn btn-primary">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="box-footer">
        <a href="admin/taikhoan/list">Danh sách</a>
    </div>
</section>
@endsection