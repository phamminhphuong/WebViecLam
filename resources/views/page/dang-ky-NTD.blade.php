@extends('layout.index') @section('nav') @include('layout.nav') @endsection @section('phieudangtuyen_hoso') @include('layout.phieudangtuyen_hoso')
@endsection @section('menu_tuhoso') @include('layout.menu_tuhoso') @endsection @section('content')
<section class="body-home">
    <div class="container">
        <div class="col-xs-8 primary">
            <div class="inner-10">
                <div class="box-content">
                    <header class="block-title">
                        <h3 class="title font-roboto text-primary">
                            <span class="text">Nhà tuyển dụng đăng ký thành viên</span>
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
                        <form action="dang-ky/nha-tuyen-dung" method="POST" enctype="multipart/form-data" class="form-employers-register">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <h3 class="title">Thông tin đăng nhập</h3>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Email
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="email" name="email">
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
                            <h3 class="title">Thông tin công ty</h3>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tên công ty
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="name" name="TenNTD" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Ghi tên công ty rõ ràng và đầy đủ theo giấy phép đăng ký kinh doanh.</p>
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
                                       <p>Nhập hình ảnh đại diện cho công ty</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Địa chỉ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="address" name="DiaChi" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Nhập thông tin địa chỉ công ty chi tiết, rõ ràng và chính xác: số nhà, đường, phường,
                                            quận.</p>
                                        <p>
                                            <b>Ví dụ:</b>
                                            Lầu 6, Tòa nhà Bitexco Nam Long, 63A Võ Văn Tần, P6, Q3, TP.Hồ Chí Minh
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Điện thoại
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="phone" name="DienThoai">
                            </div>

                            <div class="group-field">
                                <label class="label-form" for="">
                                    Địa chỉ web
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="diaChiWeb" name="DiaChiWeb">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Sơ lược về công ty
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <textarea id="description" name="GioiThieu" class="input-has-tooltip" style="height: 300px;"></textarea>
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Hãy cung cấp những thông tin cơ bản như: năm thành lập, ngành nghề hoạt động chính,
                                            thành tựu đã đạt được, đính hướng phát triển tương lai...</p>
                                        <p>
                                            <b>Ví dụ:</b>
                                            Vàng Quốc Tế IG được thành lập năm 2011, ngành nghề kinh doanh chính là chế tác và kinh doanh đồ trang sức, đại lý phân phối
                                            đồ trang sức SJC và các lĩnh vực đầu tư tài chính khác nhằm đưa đến cho người
                                            kinh doanh nhiều giải pháp mang tính đột phá, sáng tạo phù hợp với nhu cầu ngày
                                            càng nâng cao của con người trong thế kỷ 21.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="line-grey"></div>
                            <div class="group-field">
                                <div class="label-form"></div>
                                <div class="group-right">
                                    <div style="margin-top: 8px;">
                                        Bằng việc nhấn nút đăng ký, bạn đã đồng ý với
                                        <a href="#" class="text-primaryx underline text-color-ntd" title="Thỏa thuận sử dụng">
                                            thỏa thuận sử dụng
                                        </a>
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