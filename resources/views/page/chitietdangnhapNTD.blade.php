@extends('layout.index') @section('content')
<section class="body-home">
    <div class="container">
        <div class="col-xs-8 primary">
            <div class="inner-10">
                <div class="box-content">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">Nhà tuyển dụng đăng nhập</span>
                            <span class="line w35_p"></span>
                            <span class="dt-ht">
                                ĐT Hỗ trợ
                                <b class="red">024 7309 8888</b>
                            </span>
                        </h3>
                    </header>

                    <div class="entry">
                        <div style=" margin-top: 13px;" class="text-right">
                            <i>Chưa có tài khoản?</i>
                            <a href="https://www.timviecnhanh.com/dang-ky/nha-tuyen-dung" title="Đăng ký" class="underline">
                                Đăng ký
                            </a>
                            <a href="https://www.timviecnhanh.com/dang-nhap/nguoi-tim-viec" title="Người tìm việc đăng nhập" class="m-l-10 btn btn-primary">
                                Người tìm việc đăng nhập
                            </a>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data" class="form-employers-register">

                            <div class="group-field">
                                <label for="" class="label-form">
                                    Email
                                </label>
                                <input type="text" id="email" name="email" />
                            </div>
                            <div class="group-field  form-input relative">
                                <label for="" class="label-form">
                                    Mật khẩu
                                </label>
                                <input type="password" id="password" name="password" />
                                <div class="icon_password">
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
                                        <a href="https://www.timviecnhanh.com/quen-mat-khau/nha-tuyen-dung" class="btn-preview col-xs-2">
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
                        <div class="fb-like-box" data-href="https://www.facebook.com/timviecnhanh" data-colorscheme="light" data-show-faces="true"
                            data-header="true" data-stream="false" data-show-border="true"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
@endsection