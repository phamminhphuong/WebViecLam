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
                            <a href="https://www.timviecnhanh.com/dang-nhap/nha-tuyen-dung" title="Đăng nhập nhà tuyển dụng" class="underline">
                                Đăng nhập
                            </a>
                            <a href="https://www.timviecnhanh.com/dang-ky/nguoi-tim-viec" class="btn m-l-10 btn-primary" title="Đăng ký người tìm việc">
                                Người tìm việc đăng ký
                            </a>
                        </div>

                        <form action="" method="POST" enctype="multipart/form-data" class="form-employers-register">

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
                                <input type="text" id="name" name="name" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>Ghi tên công ty rõ ràng và đầy đủ theo giấy phép đăng ký kinh doanh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Địa chỉ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="address" name="address" class="input-has-tooltip">
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
                                <input type="text" id="phone" name="phone">
                            </div>


                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tỉnh/thành phố
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div class="style-button w218" style="">
                                        <div class="select2-container tinh-thanh select-style" id="s2id_province">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen">Hồ Chí Minh</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6">
                                            <div class="select2-drop select2-display-none province select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="province" name="province" class="tinh-thanh select-style select2-offscreen"
                                            tabindex="-1">
                                            <option value="1">Hồ Chí Minh</option>
                                            <option value="2">Hà Nội</option>
                                            <option value="3">An Giang</option>
                                            <option value="4">Bạc Liêu</option>
                                            <option value="5">Bà Rịa-Vũng Tàu</option>
                                            <option value="6">Bắc Cạn</option>
                                            <option value="7">Bắc Giang</option>
                                            <option value="8">Bắc Ninh</option>
                                            <option value="9">Bến Tre</option>
                                            <option value="10">Bình Dương</option>
                                            <option value="11">Bình Định</option>
                                            <option value="12">Bình Phước</option>
                                            <option value="13">Bình Thuận</option>
                                            <option value="14">Cao Bằng</option>
                                            <option value="15">Cà Mau</option>
                                            <option value="16">Cần Thơ</option>
                                            <option value="17">Đà Nẵng</option>
                                            <option value="18">Đắk Lắk</option>
                                            <option value="19">Đắk Nông</option>
                                            <option value="20">Điện Biên</option>
                                            <option value="21">Đồng Nai</option>
                                            <option value="22">Đồng Tháp</option>
                                            <option value="23">Gia Lai</option>
                                            <option value="24">Hà Giang</option>
                                            <option value="25">Hà Nam</option>
                                            <option value="27">Hà Tĩnh</option>
                                            <option value="28">Hải Dương</option>
                                            <option value="29">Hải Phòng</option>
                                            <option value="30">Hậu Giang</option>
                                            <option value="31">Hòa Bình</option>
                                            <option value="32">Hưng Yên</option>
                                            <option value="33">Khánh Hòa</option>
                                            <option value="34">Kiên Giang</option>
                                            <option value="35">Kon Tum</option>
                                            <option value="36">Lai Châu</option>
                                            <option value="37">Lạng Sơn</option>
                                            <option value="38">Lào Cai</option>
                                            <option value="39">Lâm Đồng</option>
                                            <option value="40">Long An</option>
                                            <option value="41">Nam Định</option>
                                            <option value="42">Nghệ An</option>
                                            <option value="43">Ninh Bình</option>
                                            <option value="44">Ninh Thuận</option>
                                            <option value="45">Phú Thọ</option>
                                            <option value="46">Phú Yên</option>
                                            <option value="47">Quảng Bình</option>
                                            <option value="48">Quảng Nam</option>
                                            <option value="49">Quảng Ngãi</option>
                                            <option value="50">Quảng Ninh</option>
                                            <option value="51">Quảng Trị</option>
                                            <option value="52">Sóc Trăng</option>
                                            <option value="53">Sơn La</option>
                                            <option value="54">Tây Ninh</option>
                                            <option value="55">Thái Bình</option>
                                            <option value="56">Thái Nguyên</option>
                                            <option value="57">Thanh Hóa</option>
                                            <option value="58">Thừa Thiên-Huế</option>
                                            <option value="59">Tiền Giang</option>
                                            <option value="60">Trà Vinh</option>
                                            <option value="61">Tuyên Quang</option>
                                            <option value="62">Vĩnh Long</option>
                                            <option value="63">Vĩnh Phúc</option>
                                            <option value="64">Yên Bái</option>
                                            <option value="65">Toàn quốc</option>
                                            <option value="66">Nước ngoài</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Quy mô
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w218">
                                        <div class="select2-container quy-mo select-style" id="s2id_scale">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen">Không xác định</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen7">
                                            <div class="select2-drop select2-display-none scale select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="scale" name="scale" class="quy-mo select-style select2-offscreen" tabindex="-1">
                                            <option value="6">Trên 500 người</option>
                                            <option value="5">200-500 người</option>
                                            <option value="4">100-200 người</option>
                                            <option value="3">50-100 người</option>
                                            <option value="2">20-50 người</option>
                                            <option value="1">Dưới 20 người</option>
                                            <option selected="selected" value="0">Không xác định</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Sơ lược về công ty
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <textarea id="description" name="description" class="input-has-tooltip" style="height: 300px;"></textarea>
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
                            <div class="group-field">
                                <label class="label-form" for="">Fax</label>
                                <input type="text" id="fax" name="fax">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">Website</label>
                                <input type="text" id="website" name="website">
                            </div>
                            <div class="line-grey"></div>

                            <h3 class="title">Thông tin liên hệ</h3>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tên người liên hệ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="contact_name" name="contact_name">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Email
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="contact_email" name="contact_email">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Điện thoại
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="contact_phone" name="contact_phone">
                            </div>
                            <div class="group-field">
                                <div class="label-form"></div>
                                <div class="group-right">
                                    <div style="margin-top: 8px;">
                                        Bằng việc nhấn nút đăng ký, bạn đã đồng ý với
                                        <a href="https://www.timviecnhanh.com/bai-viet/thoa-thuan-su-dung" class="text-primaryx underline text-color-ntd" title="Thỏa thuận sử dụng">
                                            thỏa thuận sử dụng
                                        </a>
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

                            <input type="hidden" name="ga5gLzvS5uvn0Z" value="578d68dd5cc9c8fa44f0cb3ccb7047b2">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            <div class="inner-10">

                <div class="bg-quocte">
                    <div id="idea-employer" class="owl-carousel owl-theme" style="opacity: 1; display: block;">


















                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 10800px; left: 0px; display: block; transition: all 800ms ease; transform: translate3d(-1200px, 0px, 0px);">
                                <div class="owl-item" style="width: 300px;">
                                    <div class="item">
                                        <div class="block-sidebar no-border">
                                            <div class="content-sidebar">
                                                <div class="block-quocte">
                                                    <div class="content">
                                                        Chất lượng hồ sơ ứng viên trên Tìm Việc Nhanh đa dạng đáp ứng nhiều vị trí tuyển dụng khác nhau. Hầu hết các tin tuyển dụng
                                                        đăng trên Tìm Việc Nhanh đều mang lại cho tôi kết quả ngoài mong
                                                        đợi. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Huy Tuấn Phương-Lead Engineer
                                                        <br>Công ty cổ phần Global CyberSoft Việt Nam (GCS) </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-huy-tuan-phuong-cybersoft.png" alt="" class="avatar-quocte">
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
                                                        Tìm Việc Nhanh là sự lựa chọn uy tín, đáng tin cậy của công ty chúng tôi mỗi khi có nhu cầu tuyển dụng nhân sự. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Đặng Tiểu Ly - HR
                                                        <br>Công ty TNHH Đồng Tiến chi nhánh TP.HCM </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-dang-tieu-ly-dong-tien.png" alt="" class="avatar-quocte">
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
                                                        Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn
                                                        được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của
                                                        từng vị trí. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Giap Thi Thanh Tuyen - Operation Manager
                                                        <br>Leads Training (LT) Institute of Management </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt=""
                                                            class="avatar-quocte">
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
                                                        Hồ sơ người tìm việc trên Tìm Việc Nhanh có chất lượng tốt, đáp ứng nhanh chóng nhu cầu tuyển dụng của công ty chúng tôi
                                                        </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Phan Hải Nguyên - Kế toán trưởng
                                                        <br>Công ty CP Phần mềm Envora </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-phan-hai-nguyen-envora.png" alt="" class="avatar-quocte">
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
                                                        Quy trình làm việc của Tìm Việc Nhanh rất nhanh, gọn, tạo mọi điều kiện cho nhà tuyển dụng thực hiện các thủ tục đăng tin
                                                        một cách tốt nhất. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Hoàng Đình Thế - Trưởng P. Kinh Doanh
                                                        <br>Công ty TNHH Thiết Bị Điện Ánh Sao </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-hoang-dinh-the-thiet-bi-anh-sao.png" alt=""
                                                            class="avatar-quocte">
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
                                                        Chất lượng dịch vụ, nhân viên Chăm sóc Khách hàng, sự đa dạng nguồn ứng viên và chi phí tuyển dụng ở Tìm Việc Nhanh đều đem
                                                        lại cho tôi sự hài lòng. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Ms.Diệu - Nhân viên phòng nhân sự
                                                        <br>Công Ty CP Điện Máy Kỹ Thuật </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-dieu-dien-may-kt.png" alt="" class="avatar-quocte">
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
                                                        Tìm Việc Nhanh cung cấp giải pháp tuyển dụng hiệu quả và tiết kiệm thời gian, giúp doanh nghiệp nhanh chóng đi vào ổn định.
                                                        </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Thị Ngọc Huyền, nhân viên hành chính nhân sự
                                                        <br>Công ty cổ phần Welcron Global VN </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-huyen--welcrom-global.png" alt="" class="avatar-quocte">
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
                                                        Tìm Việc Nhanh có giao diện website dễ nhìn với công cụ tìm kiếm thông minh, thủ tục thanh toán nhanh gọn và có hỗ trợ thu
                                                        phí trực tiếp. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Ms.Nhung - Bộ phận Nhân sự
                                                        <br>Công ty TNHH ABM </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-nhung-abm.png" alt="" class="avatar-quocte">
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
                                                        Giao diện trực quan, thao tác đơn giản, thuận lợi và kho hồ sơ ứng viên phong phú là những gì Tìm Việc Nhanh gây ấn tượng
                                                        với tôi. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Quốc Việt - Bộ phận Tuyển Dụng
                                                        <br>Công ty TNHH DV Bảo vệ LONG HOÀNG </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-viet-bao-ve-long-hoang.png" alt="" class="avatar-quocte">
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
                                                        Tại Tìm Việc Nhanh, nhà tuyển dụng có cơ hội chọn lựa và tiếp cận nhiều ứng viên, đúng người, đúng vùng miền và nhanh chóng,
                                                        tiết kiệm chi phí. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Lê Xuân Trang - Chuyên viên tuyển dụng
                                                        <br>BestBuy </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-le-xuan-trang-bestbuy.png" alt="" class="avatar-quocte">
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
                                                        Với chất lượng dịch vụ tốt, nhân viên CSKH thân thiện, nhiệt tình, những nhà tuyển dụng như tôi rất yên tâm và tin tưởng
                                                        vì luôn được hỗ trợ trong quá trình sử dụng dịch vụ của Tìm Việc
                                                        Nhanh. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Ngọc Thái Ngân - HR
                                                        <br>Công ty TNHH IPSOS </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-ngân-ipsos.png" alt="" class="avatar-quocte">
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
                                                        Tìm Việc Nhanh sở hữu dịch vụ Chăm sóc Khách hàng tốt, nguồn ứng viên đa dạng, phong phú và rất uy tín. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Thị Tuyết Trâm - Phòng tuyển dụng
                                                        <br>Công Ty Cổ Phần Liên Kết Con Người </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-tuyet-tram-peoplelink.png" alt="" class="avatar-quocte">
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
                                                        Tôi rất hài lòng với dịch vụ của Tìm Việc Nhanh sau một thời gian sử dụng: nhiệt tình, chu đáo và hiệu quả. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Huỳnh Vân Trâm - Bộ phận Nhân Sự
                                                        <br>Công ty Chuyển Phát Nhanh Thái Bình Dương </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-tram-chuyen-phat-tbd.png" alt="" class="avatar-quocte">
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
                                                        Lượng ứng viên đa dạng, mức chi phí phù hợp với doanh nghiệp và hỗ trợ từ phí nhân viên Chăm sóc Khách hàng của Tìm Việc
                                                        Nhanh khiến tôi rất tin tưởng vào dịch vụ của Tìm Việc Nhanh. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Huỳnh Hồng Hòa - IT Manager
                                                        <br>Cổ Phần Quốc tế Đại dương OSS </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-hoa-dai-duong-oss.png" alt="" class="avatar-quocte">
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
                                                        Tin tuyển dụng trên Tìm Việc Nhanh có hiệu quả rất cao với đội ngũ hỗ trợ tận tình với khách hàng và giao diện thân thiện,
                                                        dễ xem và tìm hồ sơ. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Nguyễn Văn Mười- quản lý nhân sự
                                                        <br>Sàn giao dịch bất động sản Becamex IJC </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-nguyen-van-muoi-bds-becamex.png" alt="" class="avatar-quocte">
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
                                                        Tôi cảm thấy rất an tâm khi đăng tuyển trên Timviecnhanh.com vì các yêu cầu về số lượng hay chất lượng lao động tuyển dụng
                                                        luôn được đáp ứng phù hợp. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Chị Ngân - Chuyên viên hành chính nhân sự
                                                        <br>Tập Đoàn DASO </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-chi-ngan-daso.png" alt="" class="avatar-quocte">
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
                                                        Số lượng hồ sơ ứng tuyển khá nhiều và gần như ngay lập tức sau khi đăng tin tuyển dụng trên Tìm Việc Nhanh. Việc quản lý
                                                        hồ sơ cũng rất thuận tiện và nhanh chóng. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Phan Thế Hùng - Giám đốc
                                                        <br>Công ty TNHH Nông Gia Phú </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-phan-the-hung-nong-gia-phu.png" alt="" class="avatar-quocte">
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
                                                        Với nhiều năm kinh nghiệm trong việc tuyển dụng nhân sự, tôi đánh giá cao hiệu quả tuyển dụng tại Tìm Việc Nhanh. Dịch vụ
                                                        của Tìm Việc Nhanh trên website luôn luôn đổi mới mang lại nhiều
                                                        tiện ích cho nhà tuyển dụng. </div>
                                                </div>
                                                <div class="col-xs-2 offset20 block-name">
                                                    <div class="info-user">
                                                        Trần Quốc Linh - Trưởng phòng Hành chính - Nhân sự
                                                        <br>Công Ty Cổ Phần Địa Ốc Thắng Lợi </div>
                                                </div>
                                                <div class="col-xs-2 offset10 text-right">
                                                    <div class="radius50">
                                                        <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-tran-quoc-linh-dia-oc-thang-loi.png" alt=""
                                                            class="avatar-quocte">
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
                        $("#idea-employer").owlCarousel({
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