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
    <div class="container detail-content">
        <div class="">
            <div class="col-xs-8 inner-10 primary">
                <div class="detail-content box-content" id="left-content">
                    <header class="block-title">
                        <h1 class="title font-roboto text-primary">
                            <span class="text">{!!$post->TieuDe!!}</span>
                        </h1>
                    </header>
                    <article class="block-content">
                        <div class="bg-nau">
                            <div class="col-xs-3 offset10">Cập nhật <time class="entry-date published" datetime="2018-05-01 06:56:01">{!!$post->created_at!!}</time>
                            </div>
                        </div>

                        <div class="col-xs-6 p-r-10 offset10">
                            <h3 style="font-size: 16px; font-weight: bold; line-height: normal;">{!!$post->NhaTuyenDung->TenNTD!!}</h3>
                            <span>{!!$post->NhaTuyenDung->DiaChi!!}</span>
                        </div>

                        {{--
                        <div class="col-xs-2 offset20 btn-detail pull-right">
                            <a href="#" class="btn btn-danger btn-lg btn-job-detail-green" rel="nofollow">Nộp hồ sơ</a>
                        </div> --}}
                        <div class="clearfix"></div>
                        <p></p>
                        <div class="row">
                            <div class="col-xs-4 offset20 push-right-20">
                                <ul class="no-style">
                                    <li class="m-b-5">
                                        <b>- Mức lương:</b> {!!$post->LuongKhoiDiem!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Kinh nghiệm:</b> {!!$post->YeuCauKinhNghiem!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Trình độ:</b> {!!$post->TrinhDo->TenTrinhDo!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Ngành nghề:</b> {!!$post->ChuyenNganh->TenNganh!!}
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xs-4 offset20">
                                <ul class="no-style">
                                    <li class="m-b-5">
                                        <b>- Số lượng tuyển dụng:</b> {!!$post->SoLuongTuyenDung!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Vị trí tuyển dụng:</b> {!!$post->ViTriTuyenDung!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Thời hạn nộp hồ sơ:</b> {!!$post->ThoiHanNopHoSo!!}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div>
                            <b>- Mô tả công việc:</b>
                        </div>
                        <div>
                            {!!$post->MoTaCV!!}
                        </div>

                        <div class="block-info-company">
                            <header class="header-block-line">
                                <h3 class="title">Thông tin liên hệ</h3>
                            </header>
                            <div class="block-content ">
                                <table class="width-100">
                                    <tbody>
                                        <tr>
                                            <td class="width-25"><b>Liên hệ</b></td>
                                            <td>
                                                <p>{!!$post->NhaTuyenDung->TenNTD!!}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="width-25"><b>Địa chỉ</b></td>
                                            <td>
                                                <p>{!!$post->NhaTuyenDung->DiaChi!!}</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="clearfix"></div>

                        <div class="clearfix"></div>

                        <div class="clearfix"></div>
                        <style type="text/css">
                            .icon-sprite-hs-new {
                                background: rgba(0, 0, 0, 0) url("https://cdn.timviecnhanh.com/asset/home/img/sprite_hd_new.png?ver=20151124");
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
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            </div>

            <div class="sidebar inner-10 col-xs-4">



                <div class="block-sidebar">
                    <div class="content-sidebar box_vnb_right">
                        <div class="text-center">
                            <div class="text-center">
                                <img src="imageNTD/{!!$post->NhaTuyenDung->HinhAnh!!}" alt="Công ty cổ phần Hinode Network">
                            </div>
                            <div class="title-employer font-roboto line-height-15">
                                {!!$post->NhaTuyenDung->TenNTD!!}
                            </div>
                        </div>
                        <p>
                            <b>Địa chỉ:</b> {!!$post->NhaTuyenDung->DiaChi!!}
                        </p>
                        <p>
                            <b>Điện thoại:</b> {!!$post->NhaTuyenDung->DienThoai!!}
                        </p>
                        <p>
                            <i>Cập nhật </i> {!!$post->NhaTuyenDung->updated_at!!}
                        </p>

                        <p>
                            <span class="employer-viewall" id="employer-viewall">
                    <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title=""><i>Xem đầy đủ</i></a>
                </span>
                        </p>
                    </div>
                </div>

                <style type="text/css">
                    .header-block-line2 {
                        border-left: 5px solid red;
                        position: relative;
                        overflow: hidden;
                        margin-bottom: 10px;
                    }

                    .header-block-line2 .title {
                        float: left;
                        color: #2d82c3;
                        padding-left: 10px;
                        padding-top: 7px;
                        padding-bottom: 7px;
                        font-size: 16px;
                        padding-right: 10px;
                        font-weight: 700;
                    }
                </style>
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- start popup -->
    <div id="popup_component_new">
        <div id="pos_popup_new">
            <div id="popup_content_new">
                <div class="bt2-close">
                </div>
                <div class="m12 font14 lh25" id="pop_resume"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#resume-fast-save').click(function () {
        location.href = "https://www.timviecnhanh.com/nguoi-tim-viec/ho-so-fast-save?id=" + $('#resume_id_fast').val() + "&url=aHR0cHM6Ly93d3cudGltdmllY25oYW5oLmNvbS9uZ3VvaS10aW0tdmllYy90dS1oby1zby1uZXc,&type=resume_fast_save";
    });
    
    $('#resume-fast-replace').click(function () {
        // location.href = "https://www.timviecnhanh.com/nguoi-tim-viec/ho-so-fast-replace?id=" + $('#resume_id_replace').val() + "&url=aHR0cHM6Ly93d3cudGltdmllY25oYW5oLmNvbS9uZ3VvaS10aW0tdmllYy90dS1oby1zby1uZXc,&type=resume_fast_replace";
        var jqxhr = $.ajax( "https://www.timviecnhanh.com/nguoi-tim-viec/ho-so-fast-replace?id=" + $('#resume_id_replace').val())
            .done(function() {
                $('.btn_close3').trigger('click');
                nop_hs_thanh_cong_4();
            });
    });
    
        var heightOutlineBoxSearch = parseInt($(".search-action").offset().top) - 101;
        var heightInlineBoxSearch = parseInt($('.search-action').height());
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > heightOutlineBoxSearch) {
                $('.search-action').addClass('jobdetail-fixed');
                $('.search-action .block-sidebar').css('margin-top', 0);
                var stopsroll = parseInt($(".footer-hotline").offset().top);
                var tmp = parseInt($(window).scrollTop()) + heightInlineBoxSearch +162;
                if(tmp >= stopsroll){
                    $('.search-action').css({'top':stopsroll-tmp + 98});
                }else{
                    $('.search-action').css({'top':101});
                }
            } else {
                $('.search-action').removeClass('jobdetail-fixed');
                $('.search-action .block-sidebar').css('margin-top', 10);
                $('.search-action').css('position', '');
            }
        });
    </script>
</section>
@endsection