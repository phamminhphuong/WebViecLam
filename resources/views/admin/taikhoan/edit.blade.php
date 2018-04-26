@extends('admin.layout.index') @section('title') Sửa tài khoản @endsection @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa tài khoản</h3>
        </div>
        <div class="box-header with-border">
            <h4>Tài khoản</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $er) {{$er}}
            <br> @endforeach
        </div>
        @endif
        <br>
        <form action="admin/taikhoan/edit/{!!$taikhoan->id!!}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Email</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="email" disabled="disabled" name="email" type="email" value="{!!$taikhoan->email!!}" placeholder="Nhập email">
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
                            <option @if($ltk->id==$taikhoan->MaLoaiTaiKhoan) {{"selected"}} @endif value="{!!$ltk->id!!}">{!!$ltk->TenLoaiTaiKhoan!!}</option>
                            @endforeach
                        </select>
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
        <a href="admin/taikhoan/list">Danh sách</a>
    </div>
</section>
@endsection