@extends('admin.layout.index') 
@section('title')
    Sửa kỹ năng xin việc
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa kỹ năng xin việc</h3>
        </div>
        <div class="box-header with-border">
            <h4>Kỹ năng xin việc</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/kynangxinviec/edit/{!!$kynangxinviec->id!!}" enctype="multipart/form-data" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-horizontal">
                
            <div class="form-group">
                <b class="control-label col-md-2"> Tiêu đề</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="{!!$kynangxinviec->TieuDe!!}" placeholder="Nhập tiêu đề">
                </div>
            </div>
            
            <div class="form-group">
                <b class="control-label col-md-2"> Nội dung</b>
                <div class="col-md-10">
                    <textarea id="NoiDung" name="NoiDung">{!!$kynangxinviec->NoiDung!!}</textarea>
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Hình ảnh</b>
                <div class="col-md-10">
                    <img src="image_KyNang/{!!$kynangxinviec->HinhAnh!!}" width="300px" height="200px" alt="">
                    <br><br>
                  <input type="file" name="HinhAnh" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Nhà tuyển dụng</b>
                <div class="col-md-10">
                    <select class="form-control" id="MaNTD" name="MaNTD">
                        @foreach($nhatuyendung as $ntd)
                             <option value="{!!$ntd->id!!}">{!!$ntd->TenNTD!!}</option>
                        @endforeach
                    </select>
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
        <a href="admin/kynangxinviec/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'NoiDung');
   </script>
@endsection