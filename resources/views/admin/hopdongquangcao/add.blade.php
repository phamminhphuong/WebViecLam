@extends('admin.layout.index') 
@section('title')
    Thêm trình độ
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới trình độ</h3>
        </div>
        <div class="box-header with-border">
            <h4>Trình độ</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/hopdongquangcao/add" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
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
                    <b class="control-label col-md-2"> Ngày lập hợp đồng</b>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="NgayLap">
                    </div>
                </div>
                <div class="form-group">
                        <b class="control-label col-md-2"> Nội dung hợp đồng</b>
                        <div class="col-md-10">
                            <textarea id="NoiDungHopDong" name="NoiDungHopDong"></textarea>
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
        <a href="admin/hopdongquangcao/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'NoiDungHopDong');
   </script>
@endsection