@extends('layout.index') @section('nav') @include('layout.nav') @endsection @section('phieudangtuyen_hoso') @include('layout.phieudangtuyen_hoso')
@endsection @section('menu_tuhoso') @include('layout.menu_tuhoso') @endsection @section('content')
<section class="body-home" style="margin-bottom:20px">
    <div class="line-full bg_sky comlistall">
        <div class="container">
            <div class="action-header">
                <div class="form-search-job12">
                    <form action="" method="get" accept-charset="utf-8" class="">
                        <div class="row-fix">
                        
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
            @foreach($phieudangtuyen as $pdt)
            <div class="box-company-joblist bg_white">
                <div class="box-company-item floatLeft width_100">
                    <div class="logo-box-company floatLeft" style="width: 19%">
                        <img src="imageNTD/{!!$pdt->nhatuyendung->HinhAnh!!}" alt="Công ty TNHH Nhà Hàng Món Huế">
                    </div>
                    <div class="box-company-nitem floatLeft" style="width: 74%; padding-right:10px;">
                        <a href="vendor/{!!$pdt->nhatuyendung->id!!}" title="Công ty TNHH Nhà Hàng Món Huế"
                            style="white-space: normal">
                            <h3 class="box-company-title">
                                {!!$pdt->nhatuyendung->TenNTD!!} </h3>
                        </a>
                        <div class="box-company-address">
                            <span class="bold">Địa chỉ:</span>
                            {!!$pdt->nhatuyendung->DiaChi!!} </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="box-job-item-company">
                    <div class="box-company-list floatLeft">
                        <h2 class="title-joblist-company">
                            <a href="vendor/{!!$pdt->nhatuyendung->id!!}" class="link-title-joblist-company" style="white-space: normal">
                                {!!$pdt->ViTriTuyenDung!!} </a>
                        </h2>
                        <div class="floatLeft width_100">
                            <div class="w_33 floatLeft item-des-box-company">
                                <span class="bold">- Số lượng tuyển dụng:</span>
                                {!!$pdt->SoLuongTuyenDung!!}</div>
                            <div class="w_33 floatLeft item-des-box-company">
                                <span class="bold">- Tỉnh/Thành phố:</span>
                                <span title="Hồ Chí Minh, Bình Dương, Đồng Nai">
                                    {!!$pdt->NoiLamViec!!} </span>
                            </div>
                            <div class="w_33 floatLeft item-des-box-company">
                                <span class="bold">- Kinh nghiệm:</span>
                                {!!$pdt->YeuCauKinhNghiem!!} </div>
                            <div class="w_33 floatLeft item-des-box-company">
                                <span class="bold">- Mức lương:</span>
                                {!!$pdt->LuongKhoiDiem!!}  triệu</div>
                            <div class="w_33 floatLeft item-des-box-company">
                                <span class="bold">- Ngành nghề:</span>

                                <span title="Du lịch/Nhà hàng/Khách sạn, Quản lý điều hành, Thực phẩm/DV ăn uống">
                                    {!!$pdt->chuyennganh->TenNganh!!} </span>
                            </div>
                            <div class="w_33 floatLeft item-des-box-company">
                                <span class="bold">- Trình độ:</span>
                                {!!$pdt->trinhdo->TenTrinhDo!!} </div>
                        </div>
                    </div>
                    <div class="button-chitiet-box floatRight">
                        {{-- <button type="button" class="btn btn-skynew btn-big w160" onclick="vendor/{!!$pdt->nhatuyendung->id!!}">
                            Xem chi tiết
                        </button> --}}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
    
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            @endforeach
        </div>
    </div>

    {{-- <div class="no-hover text-center">
        <div class="page-navi ajax">
            <a class="prev item active">&lt;</a>
            <a class="item active">
                1 </a>
            <a href="https://www.timviecnhanh.com/viec-lam/cau-lac-bo-12-trieu?&amp;page=2" class="item">
                2 </a>
            <a href="https://www.timviecnhanh.com/viec-lam/cau-lac-bo-12-trieu?&amp;page=3" class="item">
                3 </a>
            <a href="https://www.timviecnhanh.com/viec-lam/cau-lac-bo-12-trieu?&amp;page=4" class="item">
                4 </a>
            <a href="https://www.timviecnhanh.com/viec-lam/cau-lac-bo-12-trieu?&amp;page=5" class="item">
                5 </a>

            <a href="https://www.timviecnhanh.com/viec-lam/cau-lac-bo-12-trieu?&amp;page=2" class="next item">&gt;</a>
        </div>
    </div> --}}
</section>
@endsection