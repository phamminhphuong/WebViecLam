@extends('admin.layout.index') 
@section('title')
    Chi tiết hợp đồng quảng cáo
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Chi tiết</h3>
        </div>
        <div class="box-header with-border">
            <h4>Hợp đồng quảng cáo</h4>
        </div>
        <br>
        <div style="margin-bottom:10px">   
            <dl class="dl-horizontal">
                <dt>
                   Mã hợp đồng
                </dt>
                <dd>
                    {!!$hopdongquangcao->id!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Ngày lập
                </dt>
                <dd>
                    {!!$hopdongquangcao->NgayLap!!}
                </dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>
                   Nội dung hợp đồng
                </dt>
                <dd>
                    {!!$hopdongquangcao->NoiDungHopDong!!}
                </dd>
            </dl>

        </div>
        <br><br>
    </div>
    <div class="box-footer">
        <a href="admin/hopdongquangcao/list">Danh sách</a>
    </div>
</section>
@endsection