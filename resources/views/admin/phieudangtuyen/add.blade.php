@extends('admin.layout.index') @section('title') Thêm phiếu đăng tuyển @endsection @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Tạo mới phiếu đăng tuyển</h3>
        </div>
        <div class="box-header with-border">
            <h4>Phiếu đăng tuyển</h4>
        </div>
        @if(count($errors) >0)
        <div class="alert alert-danger">
         @foreach($errors->all() as $er)
            {{$er}}<br>
        @endforeach
     </div> 
     @endif
        <br>
        <form action="admin/phieudangtuyen/add" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-horizontal">
                {{-- --}}
                <div class="form-group">
                    <b class="control-label col-md-2">Nhà tuyển dụng</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaNTD" name="MaNTD">
                            @foreach($nhatuyendung as $ntd)
                            <option value="{!!$ntd->id!!}">{!!$ntd->TenNTD!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Chuyên ngành</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaNganh" name="MaNganh">
                            @foreach($chuyennganh as $cn)
                            <option value="{!!$cn->id!!}">{!!$cn->TenNganh!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Trình độ</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaTrinhDo" name="MaTrinhDo">
                            @foreach($trinhdo as $td)
                            <option value="{!!$td->id!!}">{!!$td->TenTrinhDo!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Chứng chỉ</b>
                    <div class="col-md-10">
                        <select class="form-control" id="MaChungChi" name="MaChungChi">
                            @foreach($chungchi as $cc)
                            <option value="{!!$cc->id!!}">{!!$cc->TenChungChi!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Tiêu đề</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="" placeholder="Nhập vị trí tuyển dụng">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Vị trí tuyển dụng</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="ViTriTuyenDung" name="ViTriTuyenDung" type="text" value="" placeholder="Nhập vị trí tuyển dụng">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Mổ tả công việc</b>
                    <div class="col-md-10">
                        <textarea name="MoTaCV" id="MoTaCV"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Thời hạn nộp sơ</b>
                    <div class="col-md-10">
                        <input type="date" class="form-control" name="ThoiHanNopHoSo">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Số lượng tuyển dụng</b>
                    <div class="col-md-10">
                        <input type="number" name="SoLuongTuyenDung" class="form-control" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2"> Nơi làm việc</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="NoiLamViec" name="NoiLamViec" type="text" value="" placeholder="Nhập nơi làm việc">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Yêu cầu kinh nghiệm</b>
                    <div class="col-md-10">
                        <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                            data-val-length-max="50" id="YeuCauKinhNghiem" name="YeuCauKinhNghiem" type="text" value="" placeholder="Nhập yêu cầu kinh nghiệm">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Lương khởi điểm</b>
                    <div class="col-md-10">
                        <input type="number" name="LuongKhoiDiem" class="form-control" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <b class="control-label col-md-2">Hot</b>
                    <div class="col-md-10">
                        <select class="form-control" id="Hot" name="Hot">
                            <option value="true">Hot</option>
                            <option value="false">Không hot</option>
                        </select>
                    </div>
                </div>
                {{-- --}}

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input type="submit" value="Tạo mới" class="btn btn-primary">
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="box-footer">
        <a href="admin/phieudangtuyen/list">Danh sách</a>
    </div>
</section>
@endsection @section('script')
<script>
    CKEDITOR.replace('MoTaCV');
</script> @endsection