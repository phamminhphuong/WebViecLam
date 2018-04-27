@extends('admin.layout.index') 
@section('title')
    Chi tiết quảng cáo
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Quảng cáo</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                   Mã quảng cáo
                </dt>
                <dd>
                    {!!$quangcao->id!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Tiêu đề
                </dt>
                <dd>
                    {!!$quangcao->TieuDe!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                  Hình ảnh
                </dt>
                <dd>
                    <img src="image_QuangCao/{!!$quangcao->HinhAnh!!}" width="500px" height="300px" alt="">
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                 Thời hạn quảng cáo
                </dt>
                <dd>
                    {!!$quangcao->ThoiHanDangQC!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/quangcao/edit/{!!$quangcao->id!!}">Sửa</a> |
        <a href="admin/quangcao/list">Danh sách</a>
    </div>
</section>
@endsection