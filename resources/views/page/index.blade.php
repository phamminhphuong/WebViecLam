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
<section class="body-home">
    <div class="container">

        <div class="job-new-week box-content">
            <div class="inner-10">
                <header class="block-title">
                    <h3 class="title font-roboto text-primary">
                        <span class="text">
                            Việc làm mới
                        </span>
                        <span class="line"></span>

                        <span class="pull-right">
                            <a href="vieclam24h.html" class="viewall" title="Việc làm mới">
                                <i class="fa fa-plus"></i>
                                Xem tất cả
                            </a>
                        </span>
                    </h3>
                </header>
            </div>

            <article class="block-content">
                <div class="col-xs-4 outner10">
                    <ul class="list-post">
                        @foreach($newPosts1 as $post)
                        <li class="block-item">
                            <a href="post/{!!$post->id!!}" class="item " title="">
                                <span class="text">{!!str_limit($post->TieuDe, $limit = 50, $end = '...')!!}</span>
                            </a>
                            <span class="flash-hot"></span>
                            <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="">
                                <p class="author">{!!str_limit($post->NhaTuyenDung->TenNTD, $limit = 50, $end = '...')!!}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-xs-4 outner10">
                    <ul class="list-post">
                        @foreach($newPosts2 as $post)
                        <li class="block-item">
                            <a href="post/{!!$post->id!!}" class="item " title="">
                                <span class="text">{!!str_limit($post->TieuDe, $limit = 50, $end = '...')!!}</span>
                            </a>
                            <span class="flash-hot"></span>
                            <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="">
                                <p class="author">{!!str_limit($post->NhaTuyenDung->TenNTD, $limit = 50, $end = '...')!!}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-xs-4 outner10">
                    <ul class="list-post">
                        @foreach($newPosts3 as $post)
                        <li class="block-item">
                            <a href="post/{!!$post->id!!}" class="item " title="">
                                <span class="text">{!!str_limit($post->TieuDe, $limit = 50, $end = '...')!!}</span>
                            </a>
                            <span class="flash-hot"></span>
                            <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="">
                                <p class="author">{!!str_limit($post->NhaTuyenDung->TenNTD, $limit = 50, $end = '...')!!}</p>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="clearfix"></div>
            </article>
        </div>
        <div class="breaking-news-center">
            <span class="icon-breaking-left floatLeft"></span>
            <span class="text text-breaking-center floatLeft font14">
                <a href="luong-10-trieu">
                    Có
                    <span class="text-red bold">{!!$number10trieu!!}</span> việc làm
                    <span class="bold">LƯƠNG TRÊN 10 TRIỆU </span>đang tuyển
                    <span class="text-danger-B text-red bold">
                        <span class="icon icon-xs icon-2-arrow"></span>
                        BẤM XEM NGAY!
                    </span>
                </a>
            </span>
            <span class="icon-breaking-right floatRight"></span>
        </div>
        <div class="col-xs-8 primary no-padding">
            <div class="inner-10">
                <div class="clearfix"></div>

                <style type="text/css">
                    .icon-sprite-hs-new {
                        background: rgba(0, 0, 0, 0) url("../cdn.timviecnhanh.com/asset/home/img/sprite_hd_newc637.png?ver=20151124");
                        display: inline-block;
                        height: 20px;
                        width: 20px;
                        position: relative;
                        top: 4px;
                        margin: -1px 4px -1px 0;
                    }

                    /* News Banner */

                    .item-left-bn,
                    .item-right-bn {
                        max-height: 300px;
                        max-width: 300px;
                        float: left;
                    }

                    .item-left-bn {
                        padding-right: 20px;
                    }

                    .box-banner-news {
                        display: block;
                        height: 214px;
                        max-width: 280px;
                        padding: 10px;
                        position: absolute;
                        top: 0;
                        z-index: 1;
                    }

                    .banner-news-img {
                        float: left;
                    }

                    .banner_company_text {
                        color: #757575;
                        font-size: 14px;
                        font-weight: 400;
                        max-width: 150px;
                        float: left;
                        margin-top: 5px;
                    }

                    .ln_hr_banner_news {
                        border-top: 1px solid #e0e0e0;
                        width: 280px;
                        margin-top: 6px;
                    }

                    .banner_job_text {
                        color: #363636;
                        font-size: 14px;
                        font-weight: 600;
                        max-width: 300px;
                        margin-top: 10px;
                    }

                    .mb10 {
                        margin-bottom: 10px;
                    }

                    .btn-news-banner {
                        background: #ff4081 none repeat scroll 0 0;
                        border-radius: 2px;
                        box-shadow: 0 1px 2px 0 rgba(50, 50, 50, 0.27);
                        color: #fff;
                        cursor: pointer;
                        display: block;
                        font-size: 14px;
                        font-weight: 600;
                        height: 38px;
                        line-height: 40px;
                        text-align: center;
                        text-decoration: none;
                        width: 280px;
                        margin-top: 8px;
                    }

                    .btn-news-banner:hover {
                        background: #e91e63 none repeat scroll 0 0;
                        color: #fff !important;
                    }

                    .uppercase {
                        text-transform: uppercase;
                    }

                    .kn-cv {
                        float: left;
                        width: 50%;
                    }

                    .info-ntd-fav-txt {
                        font-size: 14px;
                        line-height: 17px;
                        margin: 0 0 5%;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                    }

                    .icon-salary-bn-news {
                        background-position: -29px -784px;
                        float: left;
                        margin-right: 5px;
                        top: 0;
                    }

                    .icon-location-bn-news {
                        background-position: -4px -784px;
                        float: left;
                        margin-right: 5px;
                        top: 0;
                    }

                    /* News Banner */

                    .info_banner333 .slick-dots {
                        bottom: -40px;
                    }
                </style>



                <div class="job-hot box-content">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">Việc làm theo ngành nghề</span>
                            <span class="line"></span>
                        </h3>
                    </header>

                    <article class="block-content" id="nganh-hot">
                        <div id="field-hot-content">
                            <ul class="list col-xs-4 offset20">
                                @foreach($postsByCategory as $post)
                                <li>
                                    <a href="category/{!!$post->id!!}" title="">
                                        <b>{!!$post->TenNganh!!} ({!!$post->soLuong!!})</b>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="text-center outner-top-5">
                            <a class="viewall toggle-div" data-toggle="#field-hot-content" href="#">
                                <i class="fa fa-plus"></i>
                                Xem tất cả
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
                <div class="job-hot box-content">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">
                                Top nhà tuyển dụng trả lương cao
                            </span>
                            <span class="line"></span>
                        </h3>
                    </header>
                    <article id="top-tuyen-dung-luong-cao" class="block-content outer-b-20">

                        <ul class="col-xs-4 offset20 ">
                            @foreach($bestSalaryPosts1 as $post)
                            <li class="block-item block-con">
                                <span class="text text-primary">
                                    <b>Lương: {!!$post->LuongKhoiDiem!!} triệu</b>
                                </span>
                                <span class="clearfix"></span>
                                <a href="tuyen-ky-su-hien-truong-ha-noi-4105658.html" class="item " title="Kỹ Sư Hiện Trường">
                                    <span class="text">Kỹ Sư Hiện Trường</span>
                                </a>


                                <a href="vendor/{!!$post->NhaTuyenDung->TenNTD!!}" title="">
                                    <p class="author">{!!$post->NhaTuyenDung->TenNTD!!}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        <ul class="col-xs-4 offset20 push-left-20">
                            @foreach($bestSalaryPosts2 as $post)
                            <li class="block-item block-con">
                                <span class="text text-primary">
                                    <b>Lương: {!!$post->LuongKhoiDiem!!} triệu</b>
                                </span>
                                <span class="clearfix"></span>
                                <a href="tuyen-ky-su-hien-truong-ha-noi-4105658.html" class="item " title="Kỹ Sư Hiện Trường">
                                    <span class="text">Kỹ Sư Hiện Trường</span>
                                </a>


                                <a href="vendor/{!!$post->NhaTuyenDung->TenNTD!!}" title="">
                                    <p class="author">{!!$post->NhaTuyenDung->TenNTD!!}</p>
                                </a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="clearfix"></div>
                        <div class="text-center">
                            <a href="viec-lam/tra-luong-cao.html" title="Top nhà tuyển dụng trả lương cao" class="viewall outer-t-12">
                                <i class="fa fa-plus"></i>
                                Xem tất cả
                            </a>
                        </div>
                    </article>
                </div>
                <div class="clearfix"></div>


                <div class="clearfix"></div>
                <div class="mt20">
                <a href="#">
                        <img alt="" src="image_QuangCao/{!!$promotion1->HinhAnh!!}">
                    </a>
                </div>
                <div class="job-hot box-content mt26">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">Nghề hấp dẫn dành cho bạn</span>
                            <span class="line"></span>
                        </h3>
                    </header>

                    <div id="nghe-hap-dan-content">
                        @foreach($postsForYou as $post)
                            <div class="mt20">
                                <div class="col-xs-8 job_favo_box pl0 pr0">
                                    <div class="col-xs-2 ml16 w120 mr16">
                                        <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="">
                                            <img src="imageNTD/{!!$post->NhaTuyenDung->HinhAnh!!}" alt="Công ty TNHH Kim Sơn Metal"
                                                class="" width="140">
                                        </a>
                                    </div>
                                    <div class="col-xs-5 pr0 w456">
                                        <a class="title_favo_co" href="vendor/{!!$post->NhaTuyenDung->id!!}" title="">{!!$post->NhaTuyenDung->TenNTD!!}</a>
                                        <br />
                                        <span class="content_favo_co">
                                            <b>Địa chỉ:</b>
                                        </span>
                                        <span class="content_favo_co"> {!!$post->NoiLamViec!!}</span>
                                        <br />
                                        <span class="content_favo_co">
                                            <b>Số lượng yêu cầu:</b>
                                        </span>
                                        <span class="content_favo_co">{!!$post->SoLuongTuyenDung!!}</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="hr_box"></div>
                                    <div class="ml20 mr20">
                                        <div class="w_100 mb6">
                                            <a class="title_favo_co " href="post/{!!$post->id!!}" title="">{!!$post->TieuDe!!}</a>
                                        </div>
                                        <div class="row">
                                            <div class="col_mucluong text_col-salary pl0" title="Mức lương: 5-7 triệu">
                                                <i class="icon-sprite-small icon-salary_sm"></i>
                                                <b>Mức lương:</b> {!!$post->LuongKhoiDiem!!} triệu </div>
                                            <div class="col_diadiem text_col-salary text-center" title="Hà Nội">
                                                <i class="icon-sprite-small icon-add_sm"></i>
                                                <b>Địa điểm:</b> Quảng Nam </div>
                                            <div class="col_hannop text_col-salary pr0" title="Hạn nộp: 30-04-2018">
                                                <i class="icon-sprite-small icon-time_sm"></i>
                                                <b>Hạn nộp:</b> {!!$post->ThoiHanNopHoSo!!} </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        @endforeach
                    </div>
                </div>

                <div class="clearfix"></div>


                <div class="clearfix"></div>
                <div class="mt20">
                <a href="#">
                        <img alt="" src="image_QuangCao/{!!$promotion2->HinhAnh!!}">
                    </a>
                </div>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            <div class="inner-10">
                <div class="block-sidebar">
                    <header>
                        <h3 class="title-sidebar font-roboto bg-primary">
                            Tuyển dụng nhanh
                        </h3>
                    </header>
                    <div class="content-sidebar">
                        <div id="job-fast-content">
                            <ul class="list-post inner10 n-p-b">
                                @foreach($newPosts1 as $post)
                                <li class="block-item">
                                    <a href="post/{!!$post->id!!}" class="item " title="">
                                        <span class="text">{!!str_limit($post->TieuDe, $limit = 50, $end = '...')!!}</span>
                                    </a>
                                    <span class="flash-hot"></span>
                                    <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="">
                                        <p class="author">{!!str_limit($post->NhaTuyenDung->TenNTD, $limit = 50, $end = '...')!!}</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="text-center">
                            <a href="#" class="viewall" title="Tuyển dụng nhanh">
                                <i class="fa fa-plus"></i>
                                Xem tất cả
                            </a>
                        </div>
                    </div>
                </div>
                <div class="block-sidebar">
                    <header>
                        <h3 class="title-sidebar font-roboto bg-primary">
                            Tìm kiếm việc làm
                        </h3>
                    </header>
                    <div class="content-sidebar">
                        <form id="box-right-home-job-search" action="tim-kiem" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="content-search-advance">
                                <input value="" type="text" class="input-style" placeholder="Nhập từ khóa" name="keyword">
                                <select class="select-style" name="category" id="linhvuc">
                                    <option value="">Chọn ngành nghề</option>
                                    @foreach($categories as $item)
                                    <option value="{!!$item->id!!}">{!!$item->TenNganh!!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn-big btn-danger">
                                    <i class="icon icon-xs icon-search" style="top:3px"></i>
                                    Tìm kiếm
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="block-sidebar">
                    <header>
                        <h3 class="title-sidebar font-roboto bg-primary">
                            Tuyển gấp
                        </h3>
                    </header>
                    <div class="content-sidebar box_vnb_right">
                        @foreach($fastestPosts as $post)
                            <div class=" list-items pt12">
                                <a href="post/{!!$post->id!!}" class="detail-link" title="">
                                    <h4 class="title-blockjob-main " style="font-weight: 700; font-size:12px;">
                                        {!!$post->TieuDe!!}
                                    </h4>
                                </a>
                                <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="Công Ty Cổ Phần Thương Mại và Xuất Nhập Khẩu An Thịnh">
                                    <h5 class="title-blockjob-sub" style="font-size:12px; text-transform: uppercase;">
                                        {!!$post->NhaTuyenDung->TenNTD!!}
                                    </h5>
                                </a>
                                <div class="block-manage-job-ntd pb12">
                                    <div class="w_50">
                                        <i class="icon-sprite-small icon-add"></i>
                                        Quảng Nam</div>
                                    <div class="w_50" title="3 năm">
                                        <i class="icon-sprite-small icon-year"></i>{!!$post->YeuCauKinhNghiem!!}</div>
                                    <div class="w_50">
                                        <i class="icon-sprite-small icon-salary"></i>
                                        {!!$post->LuongKhoiDiem!!} triệu</div>
                                    <div class="w_50">
                                        <i class="icon-sprite-small icon-time"></i>{!!$post->ThoiHanNopHoSo!!}</div>
                                    <div class="clearfix mb12"></div>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center">
                            <a href="viec-lam/tuyen-gap.html" class="viewall" title="Tuyển gấp">
                                <i class="fa fa-plus"></i>
                                Xem tất cả
                            </a>
                        </div>
                    </div>
                </div>
                <!-- start: Box banner -->
                <div style="margin-top:10px;">
                </div>
                <!-- end: Box banner -->

                <div class="block-ads outner-top-10">
                    <a href="#">
                        <img alt="" src="image_QuangCao/{!!$promotion1->HinhAnh!!}">
                    </a>
                </div>
                <!-- start: Box banner -->
                <div style="margin-top:10px;">
                </div>
                <!-- end: Box banner -->

                <div class="block-ads outner-top-10">
                    <a href="#">
                        <img alt="" src="image_QuangCao/{!!$promotion2->HinhAnh!!}">
                    </a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
@endsection