@extends('admin.layout.index') 
@section('title')
    Thêm quảng cáo
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới quảng cáo</h3>
        </div>
        <div class="box-header with-border">
            <h4>Quảng cáo</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/quangcao/add" method="post" enctype="multipart/form-data">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                
                <div class="form-group">
                    <b class="control-label col-md-2"> Tiêu đề</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="" placeholder="Nhập tiêu đề">
                    </div>
                </div>
                  <div class="form-group">
                    <b class="control-label col-md-2">Thời hạn quảng cáo</b>
                    <div class="col-md-10">
                      <input type="date" class="form-control" name="ThoiHanDangQC">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Hình ảnh</b>
                    <div class="col-md-10">
                      <input type="file" name="HinhAnh" class="form-control">
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
        <a href="admin/quangcao/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'NoiDung');
   </script>
@endsection