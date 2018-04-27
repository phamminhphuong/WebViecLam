@extends('admin.layout.index') 
@section('title')
    Thêm tài khoản
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới tài khoản</h3>
        </div>
        <div class="box-header with-border">
            <h4>Tài khoản</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/taikhoan/add" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Email</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="email" name="email" type="email" value="" placeholder="Nhập email">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Mật khẩu</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="password" name="password" type="password" value="" placeholder="Nhập mật khẩu">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Nhập lại mật khẩu</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="Resetpassword" name="Resetpassword" type="password" value="" placeholder="Nhập lại mật khẩu">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Loại tài khoản</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaLoaiTaiKhoan" name="MaLoaiTaiKhoan">
                            @foreach($loaitaikhoan as $ltk)
                                 <option value="{!!$ltk->id!!}">{!!$ltk->TenLoaiTaiKhoan!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Tạo mới" class="btn btn-primary">
                        <br><br>
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