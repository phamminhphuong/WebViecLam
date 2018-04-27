@extends('layout.index') @section('content')
<section class="body-home">
            
    <div class="container">
        <div class="col-xs-8 primary">
            <div class="inner-10">
                <div class="box-content">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">Người tìm việc đăng nhập</span>
                            <span class="line"></span>
                        </h3>
                    </header>
    
                    <div class="entry">
                        <div style=" margin-top: 13px;" class="text-right">
                            <i>Chưa có tài khoản?</i>
                            <a href="https://www.timviecnhanh.com/dang-ky/nguoi-tim-viec" title="Đăng ký" class="underline">
                                Đăng ký
                            </a>
                            <a href="https://www.timviecnhanh.com/dang-nhap/nha-tuyen-dung" title="Nhà tuyển dụng đăng nhập" class="m-l-10 btn btn-primary">
                                Nhà tuyển dụng đăng nhập
                            </a>
                        </div>
                        <div class="hr_header clear h22">
                            <div class="hr"></div>
                            <div class="title">
                                <span class="bg-white bold txt-color-363636 fs14">Đăng nhập nhanh bằng tài khoản mạng xã hội</span>
                            </div>
                        </div>
                        <div class="w_100 mb_22 mt_10 ">
                            <div class="txc">
                                <center>
                                    <div class="w420 display_table">
                                        <a href="javascript:void(0);" onclick="window.open('https://www.facebook.com/dialog/oauth?client_id=550850695102195&amp;scope=email&amp;redirect_uri=https://www.timviecnhanh.com/dang-nhap/nguoi-tim-viec/login-facebook','FacebookLogin','width=800','height = 570');" class="btn btn-social-fb btn-social-fb-login"><i class="icon_24 icn_social_fb"></i>Đăng nhập bằng Facebook</a>
                                        <a href="javascript:void(0);" onclick="window.open('https://accounts.google.com/o/oauth2/auth?client_id=179223922234-6plin39fppljds3rai6slto72m00vlds.apps.googleusercontent.com&amp;response_type=code&amp;scope=email&amp;redirect_uri=https://www.timviecnhanh.com/dang-nhap/nguoi-tim-viec/login-google','GoogleLogin','width=800','height = 570');" class="btn btn-social-gg btn-social-gg-login"><i class="icon_24 icn_social_gg"></i>Đăng nhập bằng Google+</a>
                                    </div>
                                    <!--<br> Không hiển thị tại đây
                                    <div class="w420 display_table">
                                        <a href="" class="icon-guide" target="_blank">
                                            <span class="icon icon-arrow icon-xs"></span>
                                            Hướng dẫn Người tìm việc đăng nhập bằng mạng xã hội
                                        </a>
                                    </div>-->
                                </center>
                            </div>
                        </div>
                        <div class="hr_header clear">
                            <div class="hr"></div>
                            <div class="title">
                                <span class="bg-white bold txt-color-363636 fs14">Đăng nhập tài khoản Tìm việc nhanh</span>
                            </div>
                        </div>
    
                        <form action="" method="POST" enctype="multipart/form-data" class="form-employers-register">
                                                    <div class="group-field">
                                <label for="" class="label-form">
                                    Email
                                </label>
                                <input type="text" id="email" name="email" />                                
                                </div>
                            <div class="group-field form-input relative">
                                <label for="" class="label-form">
                                    Mật khẩu
                                </label>
                                <input type="password" id="password" name="password" />                            <div class="icon_password">
                                    <i class="icon-ntv-24 icon-ntv-password"></i>
                                </div>
                                    
                                </div>
                            <div class="row-btn">
                                <div class="button-bottom">
                                    <div class="col-xs-4 offset10 text-right">
                                        <button type="submit" class="btn btn-big btn-danger col-xs-2 col-push-2">
                                            Đăng nhập
                                        </button>
                                    </div>
                                    <div class="col-xs-4 offset10 text-left">
                                        <a href="https://www.timviecnhanh.com/quen-mat-khau/nguoi-tim-viec" class="btn-preview col-xs-2">
                                            Quên mật khẩu
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                                                </form>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="sidebar col-xs-4">
            <div class="inner-10">
                <div class="block-sidebar no-padding no-border">
                    <div class="content-sidebar font0">
                        <div class="fb-like-box" data-href="https://www.facebook.com/timviecnhanh" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="clearfix"></div>
    </div>
    <script>
        $('form.form-employers-register div.alert-success').each(function( index ) {
            if (index > 0) {
                $( this ).css('display', 'none');
            }
        });
    </script>
            </section>
@endsection