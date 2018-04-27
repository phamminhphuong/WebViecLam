@extends('admin.layout.index') 
@section('title')
    Sửa quảng cáo
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa quảng cáo</h3>
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
        <form action="admin/quangcao/edit/{!!$quangcao->id!!}" enctype="multipart/form-data" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-horizontal">
                
            <div class="form-group">
                <b class="control-label col-md-2"> Tiêu đề</b>
                <div class="col-md-10">
                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                        data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="{!!$quangcao->TieuDe!!}" placeholder="Nhập tiêu đề">
                </div>
            </div>
              <div class="form-group">
                <b class="control-label col-md-2">Thời hạn quảng cáo</b>
                <div class="col-md-10">
                  <input type="date" class="form-control" name="ThoiHanDangQC" value="{!!$quangcao->ThoiHanDangQC!!}">
                </div>
            </div>
            <div class="form-group">
                <b class="control-label col-md-2"> Hình ảnh</b>
                <div class="col-md-10">
                    <img src="image_QuangCao/{!!$quangcao->HinhAnh!!}" width="300px" height="200px" alt="">
                  <input type="file" name="HinhAnh" class="form-control">
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
        <a href="admin/quangcao/list">Danh sách</a>
    </div>
</section>
@endsection
