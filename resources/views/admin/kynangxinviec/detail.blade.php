@extends('admin.layout.index') 
@section('title')
    Chi tiết kỹ năng xin việc
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Kỹ năng xin việc</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                   Mã kĩ năng
                </dt>
                <dd>
                    {!!$kynangxinviec->id!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Tiêu đề
                </dt>
                <dd>
                    {!!$kynangxinviec->TieuDe!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Nội dung
                </dt>
                <dd>
                    {!!$kynangxinviec->NoiDung!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Hình ảnh
                </dt>
                <dd>
                    <img src="image_KyNang/{!!$kynangxinviec->HinhAnh!!}" width="500px" height="300px" alt="">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                 Nhà tuyển dụng
                </dt>
                <dd>
                    {!!$kynangxinviec->nhatuyendung->TenNTD!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/kynangxinviec/edit/{!!$kynangxinviec->id!!}">Sửa</a> |
        <a href="admin/kynangxinviec/list">Danh sách</a>
    </div>
</section>
@endsection