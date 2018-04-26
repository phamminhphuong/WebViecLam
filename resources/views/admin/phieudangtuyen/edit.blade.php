@extends('admin.layout.index') 
@section('title')
    Sửa phiếu đăng tuyển
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Sửa phiếu đăng tuyển</h3>
        </div>
        <div class="box-header with-border">
            <h4>Phiếu đăng tuyển</h4>
        </div>
        @if(count($errors) >0)
            @foreach($errors->all() as $er)
                <div class="alert alert-danger">
                    {{$er}}
                </div>
            @endforeach
        @endif
        <br>
        <form action="admin/phieudangtuyen/edit/{!!$phieudangtuyen->id!!}" method="post">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
           <div class="form-horizontal">
                {{--    --}}
                <div class="form-group">
                        <b class="control-label col-md-2">Nhà tuyển dụng</b>
                        <div class="col-md-10">
                            <select class="form-control" id="MaNTD" name="MaNTD">
                                @foreach($nhatuyendung as $ntd)
                                     <option @if($ntd->id==$phieudangtuyen->MaNTD){!!'selected'!!} @endif value="{!!$ntd->id!!}">{!!$ntd->TenNTD!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Chuyên ngành</b>
                        <div class="col-md-10">
                            <select class="form-control" id="MaNganh" name="MaNganh">
                                @foreach($chuyennganh as $cn)
                                     <option @if($cn->id==$phieudangtuyen->MaNganh){!!'selected'!!} @endif value="{!!$cn->id!!}">{!!$cn->TenNganh!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Trình độ</b>
                        <div class="col-md-10">
                            <select class="form-control" id="MaTrinhDo" name="MaTrinhDo">
                                @foreach($trinhdo as $td)
                                     <option @if($td->id==$phieudangtuyen->MaTrinhDo){!!'selected'!!} @endif value="{!!$td->id!!}">{!!$td->TenTrinhDo!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Chứng chỉ</b>
                        <div class="col-md-10">
                            <select class="form-control" id="MaChungChi" name="MaChungChi">
                                @foreach($chungchi as $cc)
                                     <option @if($cc->id==$phieudangtuyen->MaChungChi){!!'selected'!!} @endif value="{!!$cc->id!!}">{!!$cc->TenChungChi!!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Tiêu đề</b>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                data-val-length-max="50" id="TieuDe" name="TieuDe" type="text" value="{!!$phieudangtuyen->TieuDe!!}" placeholder="Nhập vị trí tuyển dụng">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Vị trí tuyển dụng</b>
                        <div class="col-md-10">
                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                data-val-length-max="50" id="ViTriTuyenDung" name="ViTriTuyenDung" type="text" value="{!!$phieudangtuyen->ViTriTuyenDung!!}" placeholder="Nhập vị trí tuyển dụng">
                        </div>
                    </div>
                    <div class="form-group">
                        <b class="control-label col-md-2"> Mổ tả công việc</b>
                        <div class="col-md-10">
                            <textarea name="MoTaCV" id="MoTaCV">{!!$phieudangtuyen->MoTaCV!!}</textarea>
                        </div>
                    </div>
                        <div class="form-group">
                            <b class="control-label col-md-2"> Thời hạn nộp sơ</b>
                            <div class="col-md-10">
                               <input type="date" class="form-control" value="{!!$phieudangtuyen->ThoiHanNopHoSo!!}" name="ThoiHanNopHoSo">
                            </div>
                        </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Số lượng tuyển dụng</b>
                            <div class="col-md-10">
                                <input type="number" name="SoLuongTuyenDung" class="form-control" value="{!!$phieudangtuyen->SoLuongTuyenDung!!}"> 
                            </div>
                        </div>
                    <div class="form-group">
                            <b class="control-label col-md-2"> Nơi làm việc</b>
                            <div class="col-md-10">
                                <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                    data-val-length-max="50" id="NoiLamViec" name="NoiLamViec" type="text" value="{!!$phieudangtuyen->NoiLamViec!!}" placeholder="Nhập nơi làm việc">
                            </div>
                        </div>
                        <div class="form-group">
                                <b class="control-label col-md-2">Yêu cầu kinh nghiệm</b>
                                <div class="col-md-10">
                                    <input class="form-control text-box single-line" data-val="true" data-val-length="The field TenSanPham must be a string with a maximum length of 50."
                                        data-val-length-max="50" id="YeuCauKinhNghiem" name="YeuCauKinhNghiem" type="text" value="{!!$phieudangtuyen->YeuCauKinhNghiem!!}" placeholder="Nhập yêu cầu kinh nghiệm">
                                </div>
                            </div>
                        <div class="form-group">
                                <b class="control-label col-md-2">Lương khởi điểm</b>
                                <div class="col-md-10">
                                  
                                <input type="number" name="LuongKhoiDiem" class="form-control" value="{!!$phieudangtuyen->LuongKhoiDiem!!}"> 
                            
                                </div>
                            </div>
                {{--    --}}
                
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
        <a href="admin/phieudangtuyen/list">Danh sách</a>
    </div>
</section>
@endsection
@section('script')
    <script>
        CKEDITOR.replace( 'MoTaCV');
   </script>
@endsection