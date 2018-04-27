 @extends('layout.index') @section('nav') @include('layout.nav') @endsection @section('phieudangtuyen_hoso') @include('layout.phieudangtuyen_hoso')
@endsection @section('menu_tuhoso') @include('layout.menu_tuhoso') @endsection @section('content')
<section class="body-home">
    <div class="container">
        <div class="col-xs-8 primary">
            <div class="inner-10">
                <div class="box-content">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">Người tìm việc đăng ký thành viên</span>
                            <span class="line"></span>
                            <!-- <div class="pull-right">
                            <div class="hottline">ĐT Hỗ trợ <b class="red">1900 6118</b></div>
                        </div> -->
                        </h3>
                    </header>

                    <div class="entry">
                        <div class="text-right " style=" margin-top: 13px;">
                            <i>Đã là thành viên?</i>
                            <a href="https://www.timviecnhanh.com/dang-nhap/nguoi-tim-viec" title="Đăng nhập người tìm việc" class="underline">
                                Đăng nhập
                            </a>
                            <a href="https://www.timviecnhanh.com/dang-ky/nha-tuyen-dung" class="m-l-10 btn btn-primary" title="Đăng ký nhà tuyển dụng">
                                Nhà tuyển dụng đăng ký
                            </a>
                        </div>
                        <div class="hr_header clear h22">
                            <div class="hr"></div>
                            <div class="title">
                                <span class="bg-white bold txt-color-363636 fs14">Đăng ký nhanh bằng tài khoản mạng xã hội</span>
                            </div>
                        </div>
                        <div class="w_100 mb_22 mt_10 ">
                            <div class="txc">
                                <a href="javascript:void(0);" onclick="window.open('https://www.facebook.com/dialog/oauth?client_id=550850695102195&amp;scope=email&amp;redirect_uri=https://www.timviecnhanh.com/dang-nhap/nguoi-tim-viec/login-facebook','FacebookLogin','width=800','height = 570');"
                                    class="mr16 reg_fb">
                                </a>
                                <a href="javascript:void(0);" onclick="window.open('https://accounts.google.com/o/oauth2/auth?client_id=179223922234-6plin39fppljds3rai6slto72m00vlds.apps.googleusercontent.com&amp;response_type=code&amp;scope=email&amp;redirect_uri=https://www.timviecnhanh.com/dang-nhap/nguoi-tim-viec/login-google','GoogleLogin','width=800','height = 570');"
                                    class="reg_google">
                                </a>
                                <br>
                                <a href="https://www.timviecnhanh.com/nguoi-tim-viec/huong-dan-tao-tai-khoan-mang-xa-hoi-dg54.html" class="icon-guide" target="_blank">
                                    <span class="icon icon-arrow icon-xs"></span>
                                    Hướng dẫn Người tìm việc đăng ký bằng mạng xã hội
                                </a>
                            </div>
                        </div>

                        <div class="hr_header clear">
                            <div class="hr"></div>
                            <div class="title">
                                <span class="bg-white bold txt-color-363636 fs14">Đăng ký tài khoản Tìm việc nhanh</span>
                            </div>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data" class="form-employers-register">

                            <h3 class="title">Thông tin đăng nhập</h3>
                            <div class="group-field">
                                <label class="label-form">
                                    Email
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="email" name="email">
                                <i style="">
                                    <b style="padding-left:10px;">Lưu ý:</b> Vui lòng nhập đúng thông tin email để nhà tuyển dụng có thể liên hệ với bạn
                                </i>

                            </div>
                            <div class="group-field">
                                <label class="label-form">
                                    Mật khẩu
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="password" id="password" name="password" aria-autocomplete="list">
                                <i>
                                    <b style="padding-left:10px;">Lưu ý:</b> Mật khẩu tối thiểu 8 ký tự, trong đó có ít nhất 1 ký tự chữ và 1 ký tự số.
                                </i>

                            </div>
                            <div class="group-field">
                                <label for="" class="label-form">
                                    Nhập lại mật khẩu
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="password" id="confirm_password" name="confirm_password">
                            </div>

                            <div class="line-grey"></div>
                            <h3 class="title">Thông tin cá nhân</h3>
                            <div class="group-field">
                                <label class="label-form">
                                    Họ tên
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="name" name="name">
                            </div>

                            <div class="group-field">
                                <label class="label-form">
                                    Di động
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="mobile" name="mobile">
                                <i>
                                    <b style="padding-left:10px;">Lưu ý:</b> Vui lòng nhập đúng số điện thoại để nhà tuyển dụng có thể liên hệ với bạn.
                                </i>

                            </div>
                            <div class="group-field">
                                <div class="label-form"></div>
                                <div class="group-right">
                                    <div style="margin-top: 0px;">
                                        Bằng việc nhấn nút đăng ký, bạn đã đồng ý với
                                        <a href="https://www.timviecnhanh.com/bai-viet/thoa-thuan-su-dung" class="text-primary" title="Thỏa thuận sử dụng">thỏa thuận sử dụng</a>
                                        của TVN
                                    </div>
                                </div>
                            </div>

                            <div class="row-btn">
                                <button type="submit" class="btn-big btn-danger col-xs-2 col-push-2 w140">
                                    <i class="icon-sprite-hs icon_sm_2017 icon-register-home_2017"></i>Đăng ký
                                </button>
                                <div class="clearfix"></div>
                            </div>

                            <!--                        <div class="block-policy">-->
                            <!--                            <div class="title">Thỏa thuận sử dụng</div>-->
                            <!--                            <div class="content">-->
                            <!--                                -->
                            <!--                            </div>-->
                            <!--                        </div>-->

                            <input type="hidden" name="7yPd8IeEcDim2Uh" value="a6bce2d6faf59a9333ba29ec77dc5551">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            <div class="inner-10">

                <div class="bg-quocte">
                    <div id="idea-seeker" class="owl-carousel owl-theme" style="opacity: 1; display: block;">









                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 5400px; left: 0px; display: block; transition: all 800ms ease; transform: translate3d(-1200px, 0px, 0px);">
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Trên timviecnhanh.com, thông tin nhà tuyển dụng và công việc được hiển thị rõ ràng, cập nhật thường xuyên. Hồ sơ của tôi
                                                        được nhiều nhà tuyển dụng tìm kiếm và liên lạc. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Thị Sương </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-suong.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Các tính năng của Tìm Việc Nhanh đơn giản, dễ sử dụng, đội ngũ tư vấn viên rất nhiệt tình. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Hoàng Thị Ánh Hằng </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-hang.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Tìm Việc Nhanh đã hỗ trợ rất nhiều cho người tìm việc, đặc biệt là với những người mới tốt nghiệp. Chỉ cần một bộ hồ sơ trên
                                                        Tìm Việc Nhanh là tôi có thể nộp cho bất cứ công ty nào có nhu cầu
                                                        tuyển dụng. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Trần Cẩm Tú </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-minh-luan.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Bộ phận tư vấn cho người tìm việc của Tìm Việc Nhanh rất nhiệt tình. Các anh chị đã hỗ trợ tôi rất nhiều để hoàn thiện hồ
                                                        sơ </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Lê Minh Luân </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-cam-tu.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Tìm Việc Nhanh không chỉ không chỉ cung cấp các thông tin việc làm mà còn tư vấn cho tôi nhiều điều bổ ích để đáp ứng tốt
                                                        hơn các yêu cầu từ nhà tuyển dụng. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Phạm Thanh Long </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-thanh-long.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Với phong cách làm việc chuyên nghiệp, Tìm Việc Nhanh là cầu nối tin cậy giữa nhà tuyển dụng và người tìm việc. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Lò Văn Thánh </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-thanh.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Trên Tìm Việc Nhanh có rất nhiều doanh nghiệp uy tín đăng tin tuyển dụng. Thông tin việc làm từ website mang đến cho tôi
                                                        thêm hy vọng trong việc tìm thấy công việc phù hợp. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Lê Thị Thủy </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-le-thuy.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Việc đăng ký hồ sơ và cập nhật tài khoản trên Tìm Việc Nhanh rất đơn giản và không tốn nhiều thời gian. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Lê Hồng Ngọc </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-hong-ngoc.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Tôi rất tin tưởng Tìm Việc Nhanh vì thông tin nhà tuyển dụng trên website rất rõ ràng, bộ phận hỗ trợ người tìm việc rất
                                                        nhiệt tình </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Xuân Vinh </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-vinh.png" alt="" class="avatar-quocte">
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page active">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                                <div class="owl-page">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="owl-buttons">
                                <div class="owl-prev">
                                    <i class="fa fa-chevron-circle-left"></i>
                                </div>
                                <div class="owl-next">
                                    <i class="fa fa-chevron-circle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <link type="text/css" rel="stylesheet" href="https://www.timviecnhanh.com/cdn/asset/home/css/owl.carousel.css?20180421">
                <script type="text/javascript" src="https://www.timviecnhanh.com/cdn/asset/home/js/min/owl.carousel.min.js?20180421"></script>
                <script>
                    $(document).ready(function () {
                        function random(owlSelector) {
                            owlSelector.children().sort(function () {
                                return Math.round(Math.random()) - 0.5;
                            }).each(function () {
                                $(this).appendTo(owlSelector);
                            });
                        }
                        $("#idea-seeker").owlCarousel({
                            navigation: true,
                            autoPlay: true,
                            singleItem: true,
                            navigationText: [
                                "<i class='fa fa-chevron-circle-left'></i>",
                                "<i class='fa fa-chevron-circle-right'></i>"
                            ],
                            beforeInit: function (elem) {
                                random(elem);
                            }
                        });
                    });
                </script>
                <div class="block-ads outner-top-10">
                    <a href="">
                        <img alt="Banner hotline" src="https://cdn.timviecnhanh.com/asset/home/img/hotline-TVN-171215-bac-min2.png">
                    </a>
                </div>
                <!-- <div class="block-sidebar no-padding no-border">
    <div class="content-sidebar font0">
        <div class="fb-like-box" data-href="https://www.facebook.com/timviecnhanh" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
</div>
 --></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script>
        $(document).ready(function () {
            var showpopup = true;
            $('form.form-employers-register').data('serialize', $('form.form-employers-register').serialize());
            $("form.form-employers-register").on("submit", function () {
                showpopup = false;
            })
            $(window).bind('beforeunload', function (e) {
                if ($('form.form-employers-register').serialize() != $('form.form-employers-register').data('serialize') && showpopup == true) {
                    return 'Changes you made may not be saved.';
                } else {
                    e = null;
                }
            });
        });
    </script>
</section>
@endsection