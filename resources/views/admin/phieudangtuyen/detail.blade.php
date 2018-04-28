@extends('admin.layout.index') @section('title') Chi tiết phiếu đăng tuyển @endsection @section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Phiếu đăng tuyển</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">
            <dl class="dl-horizontal">
                <dt>
                    Nhà tuyển dụng
                </dt>
                <dd>
                    {!!$phieudangtuyen->nhatuyendung->TenNTD!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Chuyên ngành
                </dt>
                <dd>
                    {!!$phieudangtuyen->chuyennganh->TenNganh!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Trình độ
                </dt>
                <dd>
                    {!!$phieudangtuyen->trinhdo->TenTrinhDo!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Chứng chỉ
                </dt>
                <dd>
                    {!!$phieudangtuyen->chungchi->TenChungChi!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Tiêu đề
                </dt>
                <dd>
                    {!!$phieudangtuyen->TieuDe!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Vị trí tuyển dụng
                </dt>
                <dd>
                    {!!$phieudangtuyen->ViTriTuyenDung!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Mô tả công việc
                </dt>
                <dd>
                    {!!$phieudangtuyen->MoTaCV!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Thời hạn nộp hồ sơ
                </dt>
                <dd>
                    {!!$phieudangtuyen->ThoiHanNopHoSo!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Số lượng tuyển dụng
                </dt>
                <dd>
                    {!!$phieudangtuyen->SoLuongTuyenDung!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Nơi làm việc
                </dt>
                <dd>
                    {!!$phieudangtuyen->NoiLamViec!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Yêu cầu kinh nghiệm
                </dt>
                <dd>
                    {!!$phieudangtuyen->YeuCauKinhNghiem!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Lương khởi điểm
                </dt>
                <dd>
                    {!!$phieudangtuyen->LuongKhoiDiem!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Hot
                </dt>
                <dd>
                    {!!$phieudangtuyen->Hot!!}
                </dd>
            </dl>
            <br>
            <br>
        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/phieudangtuyen/edit/{!!$phieudangtuyen->id!!}">Sửa</a> |
        <a href="admin/phieudangtuyen/list">Danh sách</a>
    </div>
</section>
@endsection