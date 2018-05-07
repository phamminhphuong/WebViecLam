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
                            <span class="text">{!!$hosoxinviec->TieuDe!!}</span>
                        </h1>
                    </header>
                    <article class="block-content">
                        <div class="bg-nau">
                            <div class="col-xs-3 offset10">Cập nhật <time class="entry-date published" datetime="2018-05-01 06:56:01">{!!$hosoxinviec->created_at!!}</time>
                            </div>
                        </div>

                        <div class="col-xs-6 p-r-10 offset10">
                            <h3 style="font-size: 16px; font-weight: bold; line-height: normal;">{!!$hosoxinviec->HoTen!!}</h3>
                            <span>{!!$hosoxinviec->DiaChi!!}</span>
                        </div>

                        
                        <div class="clearfix"></div>
                        <p></p>
                        <div class="row">
                            <div class="col-xs-4 offset20 push-right-20">
                                <ul class="no-style">
                                    <li class="m-b-5">
                                        <b>- Mức lương:</b> 5
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Kinh nghiệm:</b> Dưới 1 năm
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Trình độ:</b> {!!$hosoxinviec->trinhdo->TenTrinhDo!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Ngành nghề:</b> {!!$hosoxinviec->chuyennganh->TenNganh!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Chứng chỉ:</b> {!!$hosoxinviec->chungchi->TenChungChi!!}
                                    </li>
                                    <li class="m-b-5">
                                        <b>- Yêu cầu lương khởi điểm:</b> {!!$hosoxinviec->LuongKhoiDiem!!} Triệu
                                    </li>
                                </ul>
                            </div>

                            <div class="col-xs-4 offset20">
                                <ul class="no-style">
                                   
                                    <li class="m-b-5">
                                        <b>- Vị trí tuyển dụng:</b> {!!$hosoxinviec->TieuDe!!}
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                

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
                                <img src="image_HoSo/{!!$hosoxinviec->HinhAnh!!}" alt="Anh">
                            </div>
                            <div class="title-employer font-roboto line-height-15">
                                {!!$hosoxinviec->HoTen!!}
                            </div>
                        </div>
                        <p>
                            <b>Địa chỉ:</b> {!!$hosoxinviec->DiaChi!!}
                        </p>
                        <p>
                            <b>Điện thoại:</b> {!!$hosoxinviec->DienThoai!!}
                        </p>
                        <p>
                            <i>Cập nhật </i>{!!$hosoxinviec->create_at!!}
                        </p>

                        <p>
                            <span class="employer-viewall" id="employer-viewall">
                    <a href="tao-ho-so" title=""><i>Xem đầy đủ</i></a>
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
    {{--  --}}
    <div class="container" style="margin-bottom:20px">
		<div class="inner-10">
			<div class="box-content">
				<header class="block-title">
					<h3 class="title font-roboto text-primary">
						<span class="text">Việc làm thích hợp với bạn</span>
						<span class="line"></span>
					</h3>
				</header>
				<article id="cv-trong-ngay" class="block-content">
					<div id="job-hot-field-content">
						<ul class="list-post-has-thumbnail no-style">
                            @foreach($phieudangtuyen as $pdt)
							<li class="col-xs-6 offset20">

								<a href="vendor/{!!$pdt->NhaTuyenDung->id!!}" title="Kế Toán Kho" class="col-xs-2 no-padding text-center offset10">
									<span class="frame-th-list">
										<img src="imageNTD/{!!$pdt->NhaTuyenDung->HinhAnh!!}" alt="CÔNG TY TNHH ROYAL BLINDS VIỆT NAM">
									</span>
								</a>
								<div class="intro col-xs-4 offset20 push-left-10">
									<a href="vendor/{!!$pdt->NhaTuyenDung->id!!}" title="Kế Toán Kho">
										<b class="">
											{!!$pdt->TieuDe!!} </b>
									</a>
									<a href="vendor/{!!$pdt->NhaTuyenDung->id!!}" title="CÔNG TY TNHH ROYAL BLINDS VIỆT NAM">
										<p class="meta">{!!$pdt->nhatuyendung->TenNTD!!}</p>
                                    </a>
                                    <p>
                                            - Chuyên ngành:
                                            <b> {!!$pdt->chuyennganh->TenNganh!!}</b>
                                        </p>
									<p>
										- Mức lương:
										<b>
                                                {!!$pdt->LuongKhoiDiem!!} triệu </b>
										- Thời hạn:
										<b>{!!$pdt->ThoiHanNopHoSo!!}</b>
									</p>
									<p>
										- Tỉnh/Thành phố:
										<b> {!!$pdt->NoiLamViec!!}</b>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							{{-- <li class="col-xs-6 offset20 push-left-20">

								<a href="https://www.timviecnhanh.com/tuyen-nhan-vien-phat-trien-thi-truong-luong-10-trieu-thang-ho-chi-minh-4129805.html"
								 title="Nhân Viên Phát Triển Thị Trường Lương 10 Triệu / Tháng" class="col-xs-2 no-padding text-center offset10">
									<span class="frame-th-list">
										<img src="https://cdn.timviecnhanh.com/asset/home/img/employer/5aeabe1808acb_1525333528.png" alt="Công Ty TNHH Nhất Lộ Phát 168">
									</span>
								</a>
								<div class="intro col-xs-4 offset20 push-left-10">
									<a href="https://www.timviecnhanh.com/tuyen-nhan-vien-phat-trien-thi-truong-luong-10-trieu-thang-ho-chi-minh-4129805.html"
									 title="Nhân Viên Phát Triển Thị Trường Lương 10 Triệu / Tháng">
										<b class="">
											Nhân Viên Phát Triển Thị Trường Lương 10... </b>
									</a>


									<a href="https://www.timviecnhanh.com/cong-ty-tnhh-nhat-lo-phat-168-tuyen-dung-2952252.html" title="Công Ty TNHH Nhất Lộ Phát 168">
										<p class="meta">Công Ty TNHH Nhất Lộ Phát 168</p>
									</a>
									<p>
										- Mức lương:
										<b>
											7-10 triệu </b>
										- Thời hạn:
										<b>19-05-2018</b>
									</p>
									<p>

										- Tỉnh/Thành phố:
										<b> Hồ Chí Minh</b>

									</p>
								</div>
								<div class="clearfix"></div>
                            </li> --}}
                            @endforeach
                            <br> <br> <br>
							<div class="clearfix"></div>
						</ul>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>
@endsection