@extends('admin.layout.index') 
@section('title')
    Thêm chứng chỉ
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới chứng chỉ</h3>
        </div>
        <div class="box-header with-border">
            <h4>Chứng chỉ</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/chungchi/add" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                <div class="form-group">
                    <b class="control-label col-md-2"> Tên chứng chỉ</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="TenChungChi" name="TenChungChi" type="text" value="" placeholder="Nhập tên chứng chỉ">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Nơi cấp</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="NoiCap" name="NoiCap" type="text" value="" placeholder="Nhập nơi cấp">
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
        <a href="admin/chungchi/list">Danh sách</a>
    </div>
</section>
@endsection