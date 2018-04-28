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
                            <img src="image/timviec.png" alt="">
                        </div>
                        <a href="dang-ky/nguoi-tim-viec" class="btn btn-big btn-danger">
                            Đăng ký Người tìm việc
                        </a>
                        <br>
                    </div>
                </div>
                <div class="icon-employers col-xs-4 offset10">
                    <div class="border-1 border-2">
                        <div class="images">
                            <img src="image/tuyendung.png" alt="Đăng nhập nhà tuyển dụng">
                        </div>
                        <a href="dang-ky/nha-tuyen-dung" class="btn btn-big btn-danger">
                            Đăng ký Nhà tuyển dụng
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
                            <a class="btn-create-hs" href="dang-nhap">
                                <span class="txt-dn">Đăng nhập</span>
                                <i class="icon-login-home-1"></i>
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="btn-create btn-create-hsm">
                            <a class="btn-create-hs" href="dang-tin">
                                <span class="txt-head">Đăng tin miễn phí</span>
                                <span class="txt-des">Tiếp cận hàng trăm nghìn người tìm việc</span>
                                <i class="icon-sprite-hs icon-hsm"></i>
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="btn-create">
                            <a class="btn-create-hs" href="tao-ho-so" title="Tủ hồ sơ">
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
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
@endsection