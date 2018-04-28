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
                        </h3>
                    </header>

                    <div class="entry">
                        <div class="text-right " style=" margin-top: 13px;">
                            <i>Đã là thành viên?</i>
                            <a href="dang-nhap" title="" class="underline">
                                Đăng nhập
                            </a>
                            <a href="dang-ky/nha-tuyen-dung" class="m-l-10 btn btn-primary" title="Đăng ký nhà tuyển dụng">
                                Nhà tuyển dụng đăng ký
                            </a>
                        </div>

                        <div class="hr_header clear">
                            <div class="hr"></div>
                            <div class="title">
                                <span class="bg-white bold txt-color-363636 fs14">Đăng ký tài khoản</span>
                            </div>
                        </div>
                        @if(count($errors) >0) 
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $er)
                                {{$er}}<br>
                            @endforeach
                        </div>
                        @endif

                        @if(!empty($messageSuccess))
                        <div class="alert alert-success">
                            {!!$messageSuccess!!}
                        </div>
                        @endif
                        <form action="" method="POST" enctype="multipart/form-data" class="form-employers-register">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
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
                                        <a href="#" class="text-primary" title="Thỏa thuận sử dụng">thỏa thuận sử dụng</a>
                                        của chúng tôi
                                    </div>
                                </div>
                            </div>

                            <div class="row-btn">
                                <button type="submit" class="btn-big btn-danger col-xs-2 col-push-2 w140">
                                    <i class="icon-sprite-hs icon_sm_2017 icon-register-home_2017"></i>Đăng ký
                                </button>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            
        </div>
        <div class="clearfix"></div>
    </div>
</section>
@endsection