@extends('admin.layout.index') 
@section('title')
    Sửa nhà tuyển dụng
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa nhà tuyển dụng</h3>
        </div>
        <div class="box-header with-border">
            <h4>Nhà tuyển dụng</h4>
        </div>
        @if(count($errors) >0) 
        <div class="alert alert-danger">
           @foreach($errors->all() as $er)
                {{$er}}<br>
           @endforeach
        </div>
        @endif
        <br>
        <form action="admin/nhatuyendung/edit/{!!$nhatuyendung->id!!}" enctype="multipart/form-data" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-horizontal">
            <div class="form-group">
                <b class="control-label col-md-2"> Tên nhà tuyển dụng</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="TenNTD" name="TenNTD" type="text" value="{!!$nhatuyendung->TenNTD!!}" placeholder="Nhập tên nhà tuyển dụng">
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Tên địa chỉ</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="DiaChi" name="DiaChi" type="text" value="{!!$nhatuyendung->DiaChi!!}" placeholder="Nhập địa chỉ">
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Điện thoại</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="DienThoai" name="DienThoai" type="text" value="{!!$nhatuyendung->DienThoai!!}" placeholder="Nhập điện thoại">
                </div>
            </div>
           
            <div class="form-group">
                <b class="control-label col-md-2"> Địa chỉ web</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" disabled="disabled" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="DiaChiWeb" name="DiaChiWeb" type="text" value="{!!$nhatuyendung->DiaChiWeb!!}" placeholder="Nhập địa chỉ web">
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Giới thiệu</b>
                <div class="col-md-10">
                    <textarea name="GioiThieu" id="GioiThieu">{!!$nhatuyendung->GioiThieu!!}</textarea>
                </div>
            </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Hình ảnh</b>
                    <div class="col-md-10">
                        <img src="imageNTD/{!!$nhatuyendung->HinhAnh!!}" width="300px" height="200px" alt="">
                        <input type="file" name="HinhAnh" class="form-control">
                    </div>
                </div>
            <div class="form-group">
                    <b class="control-label col-md-2"> Mã tài khoản</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaTaiKhoan" name="MaTaiKhoan">
                            @foreach($user as $us)
                                 <option @if($nhatuyendung->MaTaiKhoan==$us->id) {{"selected"}} @endif value="{!!$us->id!!}">{!!$us->email!!}</option>
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
        <a href="admin/nhatuyendung/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'GioiThieu');
   </script>
@endsection