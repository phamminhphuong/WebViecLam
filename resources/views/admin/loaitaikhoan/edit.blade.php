@extends('admin.layout.index') 
@section('title')
    Sửa loại tài khoản
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa loại tài khoản</h3>
        </div>
        <div class="box-header with-border">
            <h4>Loại tài khoản</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/loaitaikhoan/edit/{!!$loaitaikhoan->id!!}" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Tên loại tài khoản</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true"
                            data-val-length-max="50" id="TenLoaiTaiKhoan" name="TenLoaiTaiKhoan" type="text" value="{{$loaitaikhoan->TenLoaiTaiKhoan}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Sửa" class="btn btn-primary">
                        <br><br>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="box-footer">
        <a href="admin/loaitaikhoan/list">Danh sách</a>
    </div>
</section>
@endsection