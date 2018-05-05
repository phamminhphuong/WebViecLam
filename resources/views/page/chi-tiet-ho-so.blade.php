@extends('layout.index') 
@section('nav')
    @include('layout.nav')
@endsection
 
@section('phieudangtuyen_hoso')
    @include('layout.phieudangtuyen_hoso')
@endsection
 
@section('menu_tuhoso')
    @include('layout.menu_tuhoso')
@endsection
 
@section('content')
<div class="container">
    <div class="col-xs-12 primary no-padding">
        <div class="inner-10">
            <div class="detail-content box-content">
                <header class="block-title">
                    <h3 class="title font-roboto text-primary">
                        <span class="text">Chi tiết hồ sơ ứng viên</span>
                        <span class="line"></span>
                    </h3>
                </header>
                <article class="block-content" id="chi-tiet-ho-so">
                    <div class="clearfix"></div>

                    <div class="wrap-feedback-seeker"></div>
                    <div class="clearfix"></div>

                    <div class="block-info">
                        <div class="avatar col-xs-2 offset20 pull-left">
                            <img src="image_HoSo/{!!$hoso->HinhAnh!!}" alt="Nguyễn Xuân Mai">
                        </div>

                        <div class="info col-xs-5 offset20 push-left-20 pull-left">
                            <h2 class="name">{!!$hoso->HoTen!!}<span title="Đã xác thực thông tin liên hệ" class="icon_sprite_icn_small_green_2017 fix_icon_confirm_green_three_2017"></span></h2>
                            <div class="blank6"></div>
                            
                                <div class="clearfix"></div>
                            </div>
                            <p></p>
                            <!-- END: seeker_info -->
                        </div>

                        <div class="clearfix"></div>

                    </div>
                    <div class="block-thong-tin-uv">
                        <div class="block-title">
                            <h3 class="no-border title font-roboto text-primary">
                                Thông tin chung
                                <span class="line"></span>
                            </h3>
                        </div>
                        <div class="content">
                            <h1 class="name">Tiêu đề hồ sơ: <b class="text-danger">{!!$hoso->TieuDe!!}</b>
                            </h1><br>
                            <ul class="no-style list-profile">
                                <li class="pull-left col-xs-4 offset10">
                                    <b>- Ngành nghề:</b>


                                    {!!$hoso->ChuyenNganh->TenNganh!!}</li>


                                    <a href="https://www.timviecnhanh.com/ho-so-tim-viec-ho-chi-minh-1.html" class="text-primary" title="Hồ Chí Minh">Hồ Chí Minh</a>                                    </li>
                                <li class="pull-left col-xs-4 offset10">
                                    <b>- Số năm kinh nghiệm:</b> {!!$hoso->KinhNghiem!!} </li>
                                <li class="pull-left col-xs-4 offset10">
                                    <b>- Trình độ cao nhất:</b> {!!$hoso->TrinhDo->TenTrinhDo!!} </li>

                                <li class="pull-left col-xs-4 offset10">
                                    <b>- Mong muốn mức lương tối thiểu: </b>{!!$hoso->LuongKhoiDiem!!} triệu</li>

                                <li class="pull-left col-xs-4 offset10">
                                    <b>- Hôn nhân:</b> {!!$hoso->TinhTrangHonNhan!!} </li>

                                <li class="clearfix"></li>
                            </ul>
                        </div>
                    </div>




                    <div class="block-thong-tin-uv">
                        <div class="block-title">
                            <h3 class="no-border title font-roboto text-primary">
                                Nguyện vọng làm việc
                                <span class="line"></span>
                            </h3>
                        </div>
                        <div class="content block-p">
                            <p>{!!$hoso->NguyenVongLamViec!!}</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="line-grey"></div>
            <div class="clearfix"></div>
            <div class="wrap-feedback-seeker m-b-10"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection