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
                        <div style=" margin-top: 13px;" class="text-right">
                            <i>Đã là thành viên?</i>
                            <a href="dang-nhap" title="Đăng nhập nhà tuyển dụng" class="underline">
                                Đăng nhập
                            </a>
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
                        <br/>
                        <form action="dang-ky/nguoi-tim-viec" method="POST" enctype="multipart/form-data" class="form-employers-register">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <h3 class="title">Thông tin đăng nhập</h3>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Email
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Mật khẩu
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="password" id="password" name="password" aria-autocomplete="list">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Nhập lại mật khẩu
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="password" id="confirm_password" name="confirm_password">
                            </div>

                            <div class="line-grey"></div>
                            <h3 class="title">Thông tin người tìm việc</h3>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Họ tên
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="name" name="HoTen" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập họ tên người tìm việc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Ngày sinh
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="date" id="NgaySinh" name="NgaySinh">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập ngày sinh</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Giới tính
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <select name="GioiTinh" id="GioiTinh" style="width:460px;padding-left:10px;margin-left:10px;height:35px" class="form-has-tooltip">
                                    <option value="nam">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                               
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập giới tính</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Địa chỉ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="DiaChi" name="DiaChi" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập địa chỉ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Điện thoại
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="DienThoai" name="DienThoai" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập địa chỉ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                   Tình trạng hôn nhân
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="TinhTrangHonNhan" name="TinhTrangHonNhan" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập tình trạng hôn nhân</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Hình ảnh
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="file" id="image" name="HinhAnh" class="form-control">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                       <p>Nhập hình ảnh đại diện của bạn</p>
                                    </div>
                                </div>
                            </div>
                            <div class="line-grey"></div>
                            <div class="group-field">
                                {{--  <div class="label-form"></div>
                                <div class="group-right">
                                    <div style="margin-top: 8px;">
                                        Bằng việc nhấn nút đăng ký, bạn đã đồng ý với
                                        <a href="#" class="text-primaryx underline text-color-ntd" title="Thỏa thuận sử dụng">
                                            thỏa thuận sử dụng
                                        </a>
                                        của chúng tôi
                                    </div>
                                </div>  --}}
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