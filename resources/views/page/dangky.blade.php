@extends('layout.index') 
@section('menu_tuhoso')
    @include('layout.menu_tuhoso')
@endsection
@section('content')
<section class="body-home">
    <div class="container">
        <div class="col-xs-8 primary">
            <div class="inner-10">
                <div class="icon-seekers col-xs-4 offset10">
                    <div class="border-1 border-2">
                        <div class="images">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/dang-nhap/tim-viec.png" alt="Đăng nhập người tìm việc">
                        </div>
                        <a href="https://www.timviecnhanh.com/dang-ky/nguoi-tim-viec" class="btn btn-big btn-danger">
                            Đăng ký Người tìm việc
                        </a>
                        <a href="https://www.timviecnhanh.com/nguoi-tim-viec/huong-dan-tao-tai-khoan-thuong-dg50.html" class="icon-guide" target="_blank">
                            <span class="icon icon-arrow icon-xs"></span>
                            Hướng dẫn Người tìm việc đăng ký
                        </a>
                        <br>
                    </div>
                </div>
                <div class="icon-employers col-xs-4 offset10">
                    <div class="border-1 border-2">
                        <div class="images">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/dang-nhap/tuyen-dung.png" alt="Đăng nhập nhà tuyển dụng">
                        </div>
                        <a href="https://www.timviecnhanh.com/dang-ky/nha-tuyen-dung" class="btn btn-big btn-danger">
                            Đăng ký Nhà tuyển dụng
                        </a>
                        <a href="https://www.timviecnhanh.com/nha-tuyen-dung/huong-dan-dang-ky-tai-khoan-dg29.html" class="icon-guide" target="_blank">
                            <span class="icon icon-arrow icon-xs"></span>
                            Hướng dẫn Nhà tuyển dụng đăng ký
                        </a>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            <div class="inner-10">


                <div class="row ml10 mr10">
                    <div class="box-create">
                        <div class="btn-create btn-create-hsm">
                            <a class="btn-create-hs" href="https://www.timviecnhanh.com/dang-nhap">
                                <span class="txt-dn">Đăng nhập</span>
                                <i class="icon-login-home-1"></i>
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="btn-create btn-create-hsm">
                            <a class="btn-create-hs" href="https://www.timviecnhanh.com/nha-tuyen-dung/dang-tin?pages=1">
                                <span class="txt-head">Đăng tin miễn phí</span>
                                <span class="txt-des">Tiếp cận hàng trăm nghìn người tìm việc</span>
                                <i class="icon-sprite-hs icon-hsm"></i>
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="btn-create">
                            <a class="btn-create-hs" href="https://www.timviecnhanh.com/nguoi-tim-viec/tu-ho-so-new" title="Tủ hồ sơ">
                                <span class="txt-head">Tạo hồ sơ</span>
                                <span class="txt-des">Cách nhanh nhất để được mời phỏng vấn</span>
                                <i class="icon-sprite-hs icon-ths"></i>
                            </a>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <!-- end content center -->

                <div class="tooltip-input"></div>

                <!-- SCRIPT SLIDE 10 ITEM -->
                <script type="text/javascript">
                    var isWorking = false;
                    var slider = null;
                    var item = 5;
                    var totalItem = ($('#bx-pager li').size());
                    if (totalItem > item) {
                        var widthItem = ($('#bx-pager li').width());
                        $("#scroller").css("width", (totalItem * widthItem) + 32);
                    } else {
                        $('ul#bx-pager').children().addClass('with_active_' + totalItem);
                        $('ul#bx-pager li').addClass('tab--active--' + totalItem);
                    }

                    $(document).ready(function () {
                        if (totalItem > item) {
                            var myScroll;
                            myScroll = new IScroll('.bx-pager', {
                                scrollX: true,
                                scrollY: false,
                                mouseWheel: true,
                                bounce: false,
                                snap: true
                            });
                            $('#bx-pager_check #scroller').addClass('scroller_ie');
                        }
                        $(".control-news-slider .bx-prev").click(function () {
                            if (isWorking) {
                                return;
                            }
                            isWorking = true;
                            setTimeout(function () {
                                slider.stopAuto();
                                slider.startAuto();
                                $('.bx-controls-direction .bx-prev').trigger("click");
                                isWorking = false;
                            }, 100);
                        });

                        $(".control-news-slider .bx-next").click(function () {
                            if (isWorking) {
                                return;
                            }
                            isWorking = true;
                            setTimeout(function () {
                                slider.stopAuto();
                                slider.startAuto();
                                $('.bx-controls-direction .bx-next').trigger("click");
                                isWorking = false;
                            }, 100);
                        });

                        $(".news-slider-tab li a").click(function () {
                            slider.stopAuto();
                            slider.startAuto();
                        });

                        $(".news-slider-tab li").mouseenter(function () {
                            slider.stopAuto();
                            slider.startAuto();
                        });

                        var slider = $('.bxslider').bxSlider({
                            auto: true,
                            autoControls: true,
                            infiniteLoop: true,
                            hideControlOnEnd: true,
                            captions: true,
                            speed: 1000,
                            pause: 10000,
                            pagerCustom: '#bx-pager',
                            onSliderLoad: function () {
                            },
                            onSlideAfter: function () {
                                $("#bx-pager").find('li').removeClass("tab-selected");
                                $("a.active").parents('li').addClass("tab-selected");
                                slider.stopAuto();
                                slider.startAuto();
                            },
                            onSlideBefore: function ($slideElement, oldIndex, newIndex) {
                                if (totalItem > item) {
                                    if (newIndex === item || newIndex === totalItem - 1) {
                                        var next_item = item + 1;
                                        myScroll.goToPage(next_item, 0, 1000);
                                    }
                                    if (newIndex === item - 1 || newIndex === 0) {
                                        myScroll.goToPage(0, 0, 1000);
                                    }
                                }
                                slider.stopAuto();
                                slider.startAuto();
                            }
                        });
                    });
                </script>
                <!-- <div class="block-sidebar no-padding no-border">
<div class="content-sidebar font0">
    <div class="fb-like-box" data-href="https://www.facebook.com/timviecnhanh" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
</div>
</div>
--></div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
@endsection