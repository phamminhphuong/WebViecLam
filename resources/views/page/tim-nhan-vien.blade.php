@extends('layout.index') 
{{--  @section('nav') 
@include('layout.nav') 
@endsection   --}}
@section('phieudangtuyen_hoso') 
@include('layout.dangtintuyendung')
@endsection 
@section('menu_tuhoso') 
@include('layout.menu_tuhoso') 
@endsection 
@section('content')
<nav class="main-nav-site">
    <div class="container">
        <div class="row ml10 mr10">
            <div class="box-create">
                

<div class="block-sidebar">
    <header>
        <h3 class="title-sidebar font-roboto bg-primary">
            Tìm kiếm hồ sơ
        </h3>
    </header>
    <div class="content-sidebar">
        <form id="form-employer-resume-search" action="https://www.timviecnhanh.com/ho-so-tim-viec/tim-kiem" method="GET" enctype="multipart/form-data">
            <div class="content-search-advance">
                <input type="text" class="input-style" placeholder="Nhập từ khóa" name="tu_khoa">

                <div class="select2-container select-style" id="s2id_linhvuc"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1" style="color: rgb(149, 149, 149);">   <span class="select2-chosen">Chọn ngành nghề</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6"><div class="select2-drop select2-display-none nganh_nghe[] select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="select-style select2-offscreen" name="nganh_nghe[]" id="linhvuc" tabindex="-1">
                    <option value="">Chọn ngành nghề</option>
                                            <option value="10">Bán hàng</option>
                                            <option value="47">Tài chính/Kế toán/Kiểm toán</option>
                                            <option value="29">Hành chính/Thư ký/Trợ lý</option>
                                            <option value="32">Kinh doanh</option>
                                            <option value="21">Chăm sóc khách hàng</option>
                                            <option value="40">Nhân sự</option>
                                            <option value="22">Điện/Điện tử/Điện lạnh</option>
                                            <option value="50">Thời vụ/Bán thời gian</option>
                                            <option value="52">Xây dựng</option>
                                            <option value="12">Báo chí/Biên tập viên</option>
                                            <option value="20">Bảo vệ/Vệ sĩ/An ninh</option>
                                            <option value="13">Bất động sản</option>
                                            <option value="14">Biên dịch/Phiên dịch</option>
                                            <option value="15">Bưu chính viễn thông</option>
                                            <option value="16">Cơ khí/Kĩ thuật ứng dụng</option>
                                            <option value="17">Công nghệ thông tin</option>
                                            <option value="18">Dầu khí/Địa chất</option>
                                            <option value="19">Dệt may</option>
                                            <option value="23">Du lịch/Nhà hàng/Khách sạn</option>
                                            <option value="24">Dược/Hóa chất/Sinh hóa</option>
                                            <option value="25">Giải trí/Vui chơi</option>
                                            <option value="26">Giáo dục/Đào tạo/Thư viện</option>
                                            <option value="27">Giao thông/Vận tải/Thủy lợi/Cầu đường</option>
                                            <option value="28">Giày da/Thuộc da</option>
                                            <option value="55">Khác</option>
                                            <option value="30">Kho vận/Vật tư/Thu mua</option>
                                            <option value="58">Khu chế xuất/Khu công nghiệp</option>
                                            <option value="31">Kiến trúc/Nội thất</option>
                                            <option value="59">Làm đẹp/Thể lực/Spa</option>
                                            <option value="33">Lao động phổ thông</option>
                                            <option value="34">Luật/Pháp lý</option>
                                            <option value="36">Môi trường/Xử lý chất thải</option>
                                            <option value="37">Mỹ phẩm/Thời trang/Trang sức</option>
                                            <option value="38">Ngân hàng/Chứng khoán/Đầu tư</option>
                                            <option value="39">Nghệ thuật/Điện ảnh</option>
                                            <option value="56">Ngoại ngữ</option>
                                            <option value="41">Nông/Lâm/Ngư nghiệp</option>
                                            <option value="64">PG/PB/Lễ tân</option>
                                            <option value="65">Phát triển thị trường</option>
                                            <option value="66">Phục vụ/Tạp vụ/Giúp việc</option>
                                            <option value="42">Quan hệ đối ngoại</option>
                                            <option value="44">Quản lý điều hành</option>
                                            <option value="45">Quảng cáo/Marketing/PR</option>
                                            <option value="46">Sản xuất/Vận hành sản xuất</option>
                                            <option value="35">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                                            <option value="60">Tài xế/Lái xe/Giao nhận</option>
                                            <option value="43">Thẩm định/Giám định/Quản lý chất lượng</option>
                                            <option value="48">Thể dục/Thể thao</option>
                                            <option value="49">Thiết kế/Mỹ thuật</option>
                                            <option value="51">Thực phẩm/DV ăn uống</option>
                                            <option value="61">Trang thiết bị công nghiệp</option>
                                            <option value="62">Trang thiết bị gia dụng</option>
                                            <option value="63">Trang thiết bị văn phòng</option>
                                            <option value="11">Tư vấn bảo hiểm</option>
                                            <option value="53">Xuất-Nhập khẩu/Ngoại thương</option>
                                            <option value="54">Y tế</option>
                                    </select>

                <div class="select2-container select-style" id="s2id_khuvuc"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1" style="color: rgb(149, 149, 149);">   <span class="select2-chosen">Chọn tỉnh thành</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen7"><div class="select2-drop select2-display-none tinh_thanh[] select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="select-style select2-offscreen" name="tinh_thanh[]" id="khuvuc" tabindex="-1">
                    <option value="">Chọn tỉnh thành</option>
                                            <option value="1">
                            Hồ Chí Minh |-|(514,693)
                        </option>
                                            <option value="2">
                            Hà Nội |-|(203,550)
                        </option>
                                            <option value="3">
                            An Giang |-|(13,320)
                        </option>
                                            <option value="5">
                            Bà Rịa-Vũng Tàu |-|(30,401)
                        </option>
                                            <option value="6">
                            Bắc Cạn |-|(748)
                        </option>
                                            <option value="7">
                            Bắc Giang |-|(9,961)
                        </option>
                                            <option value="4">
                            Bạc Liêu |-|(4,869)
                        </option>
                                            <option value="8">
                            Bắc Ninh |-|(23,906)
                        </option>
                                            <option value="9">
                            Bến Tre |-|(7,199)
                        </option>
                                            <option value="11">
                            Bình Định |-|(12,448)
                        </option>
                                            <option value="10">
                            Bình Dương |-|(108,605)
                        </option>
                                            <option value="12">
                            Bình Phước |-|(6,056)
                        </option>
                                            <option value="13">
                            Bình Thuận |-|(7,592)
                        </option>
                                            <option value="15">
                            Cà Mau |-|(6,345)
                        </option>
                                            <option value="16">
                            Cần Thơ |-|(27,866)
                        </option>
                                            <option value="14">
                            Cao Bằng |-|(836)
                        </option>
                                            <option value="17">
                            Đà Nẵng |-|(47,712)
                        </option>
                                            <option value="18">
                            Đắk Lắk |-|(14,235)
                        </option>
                                            <option value="19">
                            Đắk Nông |-|(3,244)
                        </option>
                                            <option value="20">
                            Điện Biên |-|(865)
                        </option>
                                            <option value="21">
                            Đồng Nai |-|(63,264)
                        </option>
                                            <option value="22">
                            Đồng Tháp |-|(9,959)
                        </option>
                                            <option value="23">
                            Gia Lai |-|(6,351)
                        </option>
                                            <option value="24">
                            Hà Giang |-|(765)
                        </option>
                                            <option value="25">
                            Hà Nam |-|(7,304)
                        </option>
                                            <option value="27">
                            Hà Tĩnh |-|(6,185)
                        </option>
                                            <option value="28">
                            Hải Dương |-|(11,995)
                        </option>
                                            <option value="29">
                            Hải Phòng |-|(14,883)
                        </option>
                                            <option value="30">
                            Hậu Giang |-|(4,637)
                        </option>
                                            <option value="31">
                            Hòa Bình |-|(1,780)
                        </option>
                                            <option value="32">
                            Hưng Yên |-|(11,881)
                        </option>
                                            <option value="33">
                            Khánh Hòa |-|(14,901)
                        </option>
                                            <option value="34">
                            Kiên Giang |-|(8,022)
                        </option>
                                            <option value="35">
                            Kon Tum |-|(2,424)
                        </option>
                                            <option value="36">
                            Lai Châu |-|(619)
                        </option>
                                            <option value="39">
                            Lâm Đồng |-|(7,100)
                        </option>
                                            <option value="37">
                            Lạng Sơn |-|(1,386)
                        </option>
                                            <option value="38">
                            Lào Cai |-|(1,641)
                        </option>
                                            <option value="40">
                            Long An |-|(17,288)
                        </option>
                                            <option value="41">
                            Nam Định |-|(7,859)
                        </option>
                                            <option value="42">
                            Nghệ An |-|(11,424)
                        </option>
                                            <option value="43">
                            Ninh Bình |-|(5,177)
                        </option>
                                            <option value="44">
                            Ninh Thuận |-|(3,574)
                        </option>
                                            <option value="66">
                            Nước ngoài |-|(4,669)
                        </option>
                                            <option value="45">
                            Phú Thọ |-|(4,375)
                        </option>
                                            <option value="46">
                            Phú Yên |-|(5,916)
                        </option>
                                            <option value="47">
                            Quảng Bình |-|(3,902)
                        </option>
                                            <option value="48">
                            Quảng Nam |-|(10,196)
                        </option>
                                            <option value="49">
                            Quảng Ngãi |-|(9,117)
                        </option>
                                            <option value="50">
                            Quảng Ninh |-|(4,981)
                        </option>
                                            <option value="51">
                            Quảng Trị |-|(3,568)
                        </option>
                                            <option value="52">
                            Sóc Trăng |-|(4,319)
                        </option>
                                            <option value="53">
                            Sơn La |-|(1,227)
                        </option>
                                            <option value="54">
                            Tây Ninh |-|(8,072)
                        </option>
                                            <option value="55">
                            Thái Bình |-|(8,353)
                        </option>
                                            <option value="56">
                            Thái Nguyên |-|(7,641)
                        </option>
                                            <option value="57">
                            Thanh Hóa |-|(12,635)
                        </option>
                                            <option value="58">
                            Thừa Thiên-Huế |-|(11,907)
                        </option>
                                            <option value="59">
                            Tiền Giang |-|(9,665)
                        </option>
                                            <option value="65">
                            Toàn quốc |-|(7,360)
                        </option>
                                            <option value="60">
                            Trà Vinh |-|(4,210)
                        </option>
                                            <option value="61">
                            Tuyên Quang |-|(1,556)
                        </option>
                                            <option value="62">
                            Vĩnh Long |-|(10,467)
                        </option>
                                            <option value="63">
                            Vĩnh Phúc |-|(8,106)
                        </option>
                                            <option value="64">
                            Yên Bái |-|(1,500)
                        </option>
                                    </select>

                <div class="select2-container select-style" id="s2id_mucluong"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1" style="color: rgb(149, 149, 149);">   <span class="select2-chosen">Chọn mức lương</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8"><div class="select2-drop select2-display-none muc_luong select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="select-style select2-offscreen" name="muc_luong" id="mucluong" tabindex="-1">
                    <option value="">Chọn mức lương</option>
                                            <option value="2">Dưới 3 triệu</option>
                                            <option value="4">3-5 triệu</option>
                                            <option value="5">5-7 triệu</option>
                                            <option value="7">7-10 triệu</option>
                                            <option value="6">10-12 triệu</option>
                                            <option value="10">12-15 triệu</option>
                                            <option value="8">15-20 triệu</option>
                                            <option value="11">20-25 triệu</option>
                                            <option value="12">25-30 triệu</option>
                                            <option value="9">Trên 30 triệu</option>
                                    </select>

                <div class="select2-container select-style" id="s2id_ngoaingu"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1" style="color: rgb(149, 149, 149);">   <span class="select2-chosen">Chọn ngoại ngữ</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen9"><div class="select2-drop select2-display-none ngoai_ngu[] select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="select-style select2-offscreen" name="ngoai_ngu[]" id="ngoaingu" tabindex="-1">
                    <option value="">Chọn ngoại ngữ</option>
                                            <option value="10">Tiếng Anh</option>
                                            <option value="11">Tiếng Pháp</option>
                                            <option value="12">Tiếng Trung</option>
                                            <option value="13">Tiếng Nhật</option>
                                            <option value="14">Tiếng Hàn</option>
                                            <option value="15">Tiếng Nga</option>
                                            <option value="16">Tiếng Đức</option>
                                            <option value="17">Tiếng Ý</option>
                                            <option value="18">Tiếng Ả-Rập</option>
                                            <option value="19">Ngôn ngữ khác</option>
                                    </select>

                <div class="select2-container select-style" id="s2id_gioitinh"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1" style="color: rgb(149, 149, 149);">   <span class="select2-chosen">Chọn giới tính</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen10"><div class="select2-drop select2-display-none gioi_tinh select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select class="select-style select2-offscreen" name="gioi_tinh" id="gioitinh" tabindex="-1">
                    <option value="">Chọn giới tính</option>
                                            <option value="Y">Nam</option>
                                            <option value="N">Nữ</option>
                                    </select>

                <div class="select2-container select2-container-multi select-style" id="s2id_trindo"><ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen11" style="width: 266px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none trinh_do[]">   <ul class="select2-results">   <li class="select2-no-results">Không trùng khớp dữ liệu</li></ul></div></div><select class="select-style select2-offscreen" name="trinh_do[]" id="trindo" multiple="multiple" placeholder="Chọn trình độ" tabindex="-1">
                                            <option value="6">Đại học</option>
                                            <option value="5">Cao đẳng</option>
                                            <option value="4">Trung cấp</option>
                                            <option value="7">Cao học</option>
                                            <option value="3">Trung học</option>
                                            <option value="2">Chứng chỉ</option>
                                            <option value="1">Lao động phổ thông</option>
                                        <option value="-1">Tất cả</option>
                </select>

                <div class="select2-container select2-container-multi select-style" id="s2id_kinhnghiem"><ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen12" style="width: 266px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none kinh_nghiem[]">   <ul class="select2-results">   <li class="select2-no-results">Không trùng khớp dữ liệu</li></ul></div></div><select class="select-style select2-offscreen" name="kinh_nghiem[]" id="kinhnghiem" multiple="multiple" placeholder="Chọn kinh nghiệm" tabindex="-1">
                                            <option value="0">Chưa có kinh nghiệm</option>
                                            <option value="7">Dưới 1 năm</option>
                                            <option value="1">1 năm</option>
                                            <option value="2">2 năm</option>
                                            <option value="3">3 năm</option>
                                            <option value="4">4 năm</option>
                                            <option value="5">5 năm</option>
                                            <option value="6">Trên 5 năm</option>
                                    </select>
                <div class="text-center">
                    <button type="submit" class="btn-big btn-danger">
                        <i class="icon icon-xs icon-search" style="top:3px"></i>
                        Tìm kiếm
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
<script>
    $('#form-employer-resume-search').on('submit',function(){
        showLoading($(this).find(':submit').parent('div'));
        var e_input = $(this).find("input[name='tu_khoa']");
        var pattern = /^(.*?)[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}(.*?)$/i;
        if(pattern.test(e_input.val())){
            e_input.val(e_input.val().replace('@','%%%').replace('.','%%'));
        }
    });
</script>            </div>
            <div class="news-slider ml20">
                <div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 352px;"><ul class="bxslider news-slider-images" style="width: 1215%; position: relative; transition-duration: 1s; transform: translate3d(-3720px, 0px, 0px);"><li id="tab10" style="float: left; list-style: none; position: relative; width: 620px;" class="bx-clone">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí."</p>
                            <p class="author_slide"><span class="name_author_slide">Giap Thi Thanh Tuyen </span>- Operation Manager</p>
                        </a>
                    </li>
                                            <li id="tab1" class="tab-img" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/hd-saigon.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“HD SAISON chúng tôi tuyển dụng rất thường xuyên, kênh Timviecnhanh.com đáp ứng được lượng lớn ứng viên phù hợp. Nhân viên CSKH nhiệt tình &amp; hỗ trợ tối đa. Giá cả chi phí hợp lý, thường xuyên cải tiến nâng cấp hệ thống."</p>
                            <p class="author_slide"><span class="name_author_slide">Hoàng Lan Trinh </span>- Sourcing Team Leader</p>
                        </a>
                    </li>
                    <li id="tab2" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/con-cung.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tìm Việc Nhanh có lượng hồ sơ lớn &amp; phủ rộng toàn quốc, hỗ trợ rất tốt cho việc tuyển dụng ở nhiều tỉnh khác nhau. Đội ngũ chăm sóc khách hàng nhiệt tình, chu đáo. Vẫn sẽ tiếp tục sử dụng Tìm Việc Nhanh trong tương lai.​"</p>
                            <p class="author_slide"><span class="name_author_slide">Dương Thiên Kim </span>- Phòng Nhân Sự</p>
                        </a>
                    </li>
                    <li id="tab3" class="tab-img" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/cty-lee-n-man.jpg" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Đăng tin trên trang Timviecnhanh.com khá hiệu quả, thu hút nhiều ứng viên ứng tuyển, lượng hồ sơ nhiều và chất lượng. Nhân viên chăm sóc khách hàng rất nhiệt tình, hỗ trợ những yêu cầu của Nhà tuyển dụng rất nhanh chóng."</p>
                            <p class="author_slide"><span class="name_author_slide">Phan Thị Ngọc Thùy </span>- Công ty TNHH Giấy Lee&amp;Man Việt Nam</p>
                        </a>
                    </li>
                    <li id="tab4" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/karaoke-kingdom.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tại Timviecnhanh.com, nhà tuyển dụng có thể tiếp cận được nguồn ứng viên chất lượng, đội ngũ nhân viên hỗ trợ nhiệt tình khách hàng.​"</p>
                            <p class="author_slide"><span class="name_author_slide">Ms Linh Đặng </span>- Giám đốc HCNS</p>
                        </a>
                    </li>
                    <li id="tab5" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/hoa-sen.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tôi hài lòng về chất lượng dịch vụ của Tìm Việc Nhanh. Hồ sơ ứng viên phong phú, đa dạng nhiều ngành nghề, đội ngũ nhân viên năng động và hỗ trợ nhiệt tình. Tôi tin tưởng chất lượng tại đây và sẽ hợp tác lâu dài."</p>
                            <p class="author_slide"><span class="name_author_slide">Đoàn Tuấn Nhi </span>- Chuyên Viên Tuyển dụng - Đào Tạo</p>
                        </a>
                    </li>
                    <li id="tab6" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-nhung-abm.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tìm Việc Nhanh có giao diện website dễ nhìn với công cụ tìm kiếm thông minh, thủ tục thanh toán nhanh gọn và có hỗ trợ thu phí trực tiếp."</p>
                            <p class="author_slide"><span class="name_author_slide">Ms.Nhung - Bộ phận Nhân sự</span></p>
                        </a>
                    </li>
                    <li id="tab7" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-hoang-dinh-the-thiet-bi-anh-sao.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Quy trình làm việc của Tìm Việc Nhanh rất nhanh, gọn, tạo mọi điều kiện cho nhà tuyển dụng thực hiện các thủ tục đăng tin một cách tốt nhất."</p>
                            <p class="author_slide"><span class="name_author_slide">Hoàng Đình Thế </span>- Trưởng P. Kinh Doanh</p>
                        </a>
                    </li>
                    <li id="tab8" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-hoa-dai-duong-oss.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Lượng ứng viên đa dạng, mức chi phí phù hợp với doanh nghiệp và hỗ trợ từ phí nhân viên Chăm sóc Khách hàng của Tìm Việc Nhanh khiến tôi rất tin tưởng vào dịch vụ của Tìm Việc Nhanh."</p>
                            <p class="author_slide"><span class="name_author_slide">Huỳnh Hồng Hòa </span>- IT Manager</p>
                        </a>
                    </li>
                    <li id="tab9" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-tram-chuyen-phat-tbd.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tôi rất hài lòng với dịch vụ của Tìm Việc Nhanh sau một thời gian sử dụng: nhiệt tình, chu đáo và hiệu quả. "</p>
                            <p class="author_slide"><span class="name_author_slide">Huỳnh Vân Trâm </span>- Bộ phận Nhân Sự</p>
                        </a>
                    </li>
                    <!--<li id="tab9">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-nguyen-van-muoi-bds-becamex.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tin tuyển dụng trên Tìm Việc Nhanh có hiệu quả rất cao với đội ngũ hỗ trợ tận tình với khách hàng và giao diện thân thiện, dễ xem và tìm hồ sơ. "</p>
                            <p class="author_slide"><span class="name_author_slide">Nguyễn Văn Mười </span>- Quản lý nhân sự</p>
                        </a>
                    </li>-->
                    <li id="tab10" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí."</p>
                            <p class="author_slide"><span class="name_author_slide">Giap Thi Thanh Tuyen </span>- Operation Manager</p>
                        </a>
                    </li>
                    <!--<li id="tab11">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/HoThanhThien-Thang%20Loi.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">"Tôi đánh giá cao hiệu quả tuyển dụng tại Tìm Việc Nhanh. Đội ngũ nhân viên chăm sóc hỗ trợ rất nhiệt tình và chuyên nghiệp. Dịch vụ luôn được đổi mới, cải tiến mang lại nhiều tiện ích cho nhà tuyển dụng."</p>
                            <p class="author_slide"><span class="name_author_slide">Hồ Thanh Thiên </span>- Trưởng phòng Hành chính - Nhân sự</p>
                        </a>
                    </li>-->
                <li id="tab1" class="tab-img bx-clone" style="float: left; list-style: none; position: relative; width: 620px;">
                        <a class="box-slide-ntd" href="#">
                            <img src="https://cdn.timviecnhanh.com/asset/home/img/idea-employer/hd-saigon.png" alt="" class="img-avatar-slide">
                            <p class="talk_slide_top">“HD SAISON chúng tôi tuyển dụng rất thường xuyên, kênh Timviecnhanh.com đáp ứng được lượng lớn ứng viên phù hợp. Nhân viên CSKH nhiệt tình &amp; hỗ trợ tối đa. Giá cả chi phí hợp lý, thường xuyên cải tiến nâng cấp hệ thống."</p>
                            <p class="author_slide"><span class="name_author_slide">Hoàng Lan Trinh </span>- Sourcing Team Leader</p>
                        </a>
                    </li></ul></div><div class="bx-controls bx-has-controls-direction bx-has-controls-auto"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div><div class="bx-controls-auto"><div class="bx-controls-auto-item"><a class="bx-start active" href="">Start</a></div><div class="bx-controls-auto-item"><a class="bx-stop" href="">Stop</a></div></div></div></div>
                <div id="bx-pager_check" class="bx-pager">
                    <div id="scroller" style="width: 1231px; transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1); transition-duration: 0ms; transform: translate(-611px, 0px) translateZ(0px);" class="scroller_ie">
                        <ul class="news-slider-tab" id="bx-pager">
                            <li class="">
                                <a data-slide-index="0" href="" class="">
                                    <center><span class="frst-line">Công ty HD SAISON</span></center>
                                </a>
                            </li>
                            <li class="">
                                <a data-slide-index="1" href="" class="">
                                    <center><span class="frst-line">Công Ty CP Con Cưng</span></center>
                                </a>
                            </li>
                            <li class="">
                                <a data-slide-index="2" href="" class="">
                                    <center><span class="frst-line">Công ty TNHH Giấy Lee&amp;Man Việt Nam</span></center>
                                </a>
                            </li>
                            <li class="">
                                <a data-slide-index="3" href="" class="">
                                    <center><span class="frst-line">Hệ Thống Karaoke - Beer club KINGDOM</span></center>
                                </a>
                            </li>
                            <li class="">
                                <a data-slide-index="4" href="" class="">
                                    <center><span class="frst-line">Công Ty CP Tập Đoàn Hoa Sen</span></center>
                                </a>
                            </li>
                            <li class="tab-selected">
                                <a data-slide-index="5" href="" class="active">
                                    <center><span class="frst-line">Công ty TNHH ABM</span></center>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="6" href="">
                                    <center><span class="frst-line">Công ty TNHH Thiết Bị Điện Ánh Sao</span></center>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="7" href="">
                                    <center><span class="frst-line">Cổ Phần Quốc tế Đại dương OSS </span></center>
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="8" href="">
                                    <center><span class="frst-line">Chuyển Phát Nhanh Thái Bình Dương</span></center>
                                </a>
                            </li>
                            <!--<li>
                                <a data-slide-index="8" href="">
                                    <center><span class="frst-line">Sàn giao dịch bất động sản Becamex IJC</span></center>
                                </a>
                            </li>-->
                            <li>
                                <a data-slide-index="9" href="">
                                    <center><span class="frst-line">Leads Training (LT) Institute of Management</span></center>
                                </a>
                            </li>
                            <!--<li>
                                <a data-slide-index="10" href="">
                                    <center><span class="frst-line">Công Ty Cổ Phần Địa Ốc Thắng Lợi </span></center>
                                </a>
                            </li>-->
                        </ul>
                    </div>
                    <div id="bx_slider" class="control-news-slider">
                        <a class="bx-prev" href="javascript:;"></a>
                        <a class="bx-next" href="javascript:;"></a>
                    </div>
                </div>
            </div>
            <nav class="main-nav-site">
        </nav></div>
        <div class="clearfix"></div>
    </div>
</nav>
<script type="text/javascript">
    var isWorking = false;
    var slider = null;
    var item = 5;
    var totalItem = ($('#bx-pager li').size());
    if(totalItem > item) {
        var widthItem = ($('#bx-pager li').width());
        $("#scroller").css("width", (totalItem*widthItem)+ 31);
    } else {
        $('ul#bx-pager').children().addClass('with_active_'+totalItem);
        $('ul#bx-pager li').addClass('tab--active--'+totalItem);

    }

    $(document).ready(function(){
            if(totalItem > item) {
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
            $(".control-news-slider .bx-prev").click(function(){
                if(isWorking) {
                    return;
                }
                isWorking = true;
                setTimeout(function() {
                    slider.stopAuto();
                    slider.startAuto();
                    $('.bx-controls-direction .bx-prev').trigger( "click" );
                    isWorking = false;
                },20);
            });
            $(".control-news-slider .bx-next").click(function(){
                if(isWorking) {
                    return;
                }
                isWorking = true;
                setTimeout(function() {
                    slider.stopAuto();
                    slider.startAuto();
                    $('.bx-controls-direction .bx-next').trigger( "click" );
                    isWorking = false;
                },20);
            });

            $(".news-slider-tab li a").click(function(){
                slider.stopAuto();
                slider.startAuto();
            });

            $(".news-slider-tab li").mouseenter(function(){
                slider.stopAuto();
                slider.startAuto();
            });

            $("a.active").parents('li').addClass("tab-selected");

            $(".sort-menu li").hover(function(){
                $(this).addClass("sort-menu-active");
            });
            $(".news-slider-tab li").mouseenter(function(){
                $(this).find('a').trigger( "click" );
            })

            var slider = $('.bxslider').bxSlider({
                auto: true,
                autoControls: true,
                infiniteLoop: true,
                hideControlOnEnd: true,
                captions: true,
                speed: 1000,
                pause: 20000,
                pagerCustom: '#bx-pager',
                onSliderLoad: function(){
                },
                onSlideAfter: function(){
                    $("#bx-pager").find('li').removeClass("tab-selected");
                    $("a.active").parents('li').addClass("tab-selected");
                    slider.stopAuto();
                    slider.startAuto();
                },
                onSlideBefore:function($slideElement, oldIndex, newIndex){
                    if(totalItem > item){
                        if(newIndex === item || newIndex === totalItem-1){
                            var next_item = item + 1;
                            myScroll.goToPage(next_item, 0, 1000);
                        }
                        if(newIndex === item - 1 || newIndex === 0){
                            myScroll.goToPage(0, 0, 1000);
                        }
                    }
                    slider.stopAuto();
                    slider.startAuto();
                }
            });
    });
</script>
<section class="body-home">
    
    <!-- Start: BODY HOME -->
   <div class="body-home-ntd">
   
       <!-- box product service-->
       <div class="product-service">
           <div class="container">
               <h2>DỊCH VỤ</h2>
               <div class="tab_product_service" id="product-service">
                   <div id="tab-ps" class="tab-container" data-easytabs="true">
                       <ul class="etabs">
                         <li class="tab active tab-selected"><a href="#tabs-ps-post" class="active"><i class="icon-sprite-ntd icon-arr-post"></i>ĐĂNG TIN</a></li>
                         <li class="tab"><a href="#tabs-ps-banner"><i class="icon-sprite-ntd icon-arr-banner"></i>ĐĂNG BANNER</a></li>
                         <li class="tab"><a href="#tabs-ps-search"><i class="icon-sprite-ntd icon-arr-search"></i>TÌM KIẾM HỒ SƠ</a></li>
                       </ul>
   
                       <!-- box product service post -->
                       <div id="tabs-ps-post" class="content-tab-ntd active" style="display: block;">
                           <div class="intro-ps">
                               <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_product_service_ntd.png" alt="">
                               <p>Tìm việc nhanh thiết kế các gói đăng tin hiển thị nổi bật nhằm giúp nhà tuyển dụng tiếp cận hiệu quả và nhanh chóng hơn tới các ứng viên.</p>
                           </div>
                           <div class="clearfix"></div>
                           <div class="line_grey"></div>
                           <div class="box_services">
                               <div class="box_service box_left">
                                   <h3>Đăng tin trang chủ</h3>
                                   <ul>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Tin đăng hiển thị tại các vị trí của trang chủ Timviecnhanh.com</li>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Tiếp cận tối đa số người tìm việc của website</li>
                                   </ul>
                                   <div class="text-center">
                                       <button type="submit" class="btn-big btn-danger button_sub_ntd" onclick="window.open('https://www.timviecnhanh.com/nha-tuyen-dung/dang-ky-tu-van-tuyen-dung', '_blank')"><i class="icon-sprite-ntd icon-arr-fly"></i> Đăng ký tư vấn</button>
                                   </div>
                                   <div>
                                       <a href="http://baogia.timviecnhanh.com/data/uploads/2016/07/Hinh-anh-Banner-trang-chu-copy.jpg" class="viewall button_ntd floatLeft mr10" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-picture"></i>Xem mô tả hình ảnh</a>
                                       <a href="http://baogia.timviecnhanh.com/mien-nam/bao-gia-trang-chu/" class="viewall button_ntd floatLeft" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-dolla"></i>Tham khảo báo giá</a>
                                   </div>
                               </div>
                           </div>
                           <div class="box_services">
                               <div class="box_service box_right">
                                   <h3>Đăng tin trang ngành</h3>
                                   <ul>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Tin đăng hiển thị tại các vị trí nổi bật trong trang ngành nghề</li>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Tiếp cận người tìm việc mục tiêu</li>
                                   </ul>
                                   <div class="text-center">
                                       <button type="submit" class="btn-big btn-danger button_sub_ntd" onclick="window.open('https://www.timviecnhanh.com/nha-tuyen-dung/dang-ky-tu-van-tuyen-dung', '_blank')"><i class="icon-sprite-ntd icon-arr-fly"></i> Đăng ký tư vấn</button>
                                   </div>
                                   <div>
                                       <a href="http://baogia.timviecnhanh.com/data/uploads/2014/10/Hinh-anh-trang-nganh.png" target="_blank" class="viewall button_ntd floatLeft mr10" title=""><i class="icon-sprite-ntd icon-arr-picture"></i>Xem mô tả hình ảnh</a>
                                       <a href="http://baogia.timviecnhanh.com/mien-nam/bao-gia-trang-nganh/" class="viewall button_ntd floatLeft" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-dolla"></i>Tham khảo báo giá</a>
                                   </div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
   
                           <div class="clearfix"></div>
                           <div class="box_ps_help">
                               <div class="box_title_content font16 pos_relative mb_10">
                                   <h1 class="title_title_box uppercase bold text_blue">Hướng dẫn sử dụng dịch vụ đăng tin</h1>
                               </div>
                               <div class="box_services">
                                   <div class="box_service box_left center">
                                       <div class="img_rr_banner">
                                           <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_post_baner_free_ntd.png" alt="" class="">
                                       </div>
                                       <div class="text_ps_des">
                                           <div class="title">Để đăng tin miễn phí</div>
                                           <p>Các công ty, doanh nghiệp chỉ cần có tài khoản dành cho nhà tuyển dụng trên Timviecnhanh.com là có thể tiến hành đăng tin trên Timviecnhanh.com</p>
                                       </div>
                                       <div class="text-center">
                                           <button type="submit" class="btn-big btn-danger button_sub_ntd" onclick="javascript:location.href='https://www.timviecnhanh.com/nha-tuyen-dung/dang-tin?pages=1'"><i class="icon-sprite-ntd icon-arr-fly"></i> Đăng tin miễn phí</button>
                                       </div>
                                   </div>
                               </div>
                               <div class="box_services">
                                   <div class="box_service box_left center">
                                       <div class="img_rr_banner">
                                           <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_post_baner_ntd.png" alt="" class="">
                                       </div>
                                       <div class="text_ps_des">
                                           <div class="title">Để đăng tin trả phí</div>
                                           <p>Vui lòng liên hệ với bộ phận Chăm sóc khách hàng để được tư vấn và hỗ trợ</p>
                                       </div>
                                       <div class="info_contact">
                                           <div class="itemContact">
                                               <i class="icon-sprite-ntd icon-arr-call"></i>
                                               Miền Bắc: <span class="numberCall">024 7309 8888</span>
                                           </div>
                                           <div class="itemContact">
                                               <i class="icon-sprite-ntd icon-arr-call"></i>
                                               Miền Nam: <span class="numberCall">028 7309 8888</span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                       </div>
                       <!-- end box product service post -->
   
                       <!-- box product service banner -->
                       <div id="tabs-ps-banner" class="content-tab-ntd" style="display: none;">
                           <div class="intro-ps">
                               <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_product_banner_ntd.png" alt="">
                               <p>Các gói đăng banner của Timviecnhanh.com được thiết kế hiển thị nổi bật giúp nhà tuyển dụng thu hút ứng viên, quảng bá hình ảnh và thương hiệu công ty.</p>
                           </div>
                           <div class="clearfix"></div>
                           <div class="line_grey"></div>
                           <div class="box_services">
                               <div class="box_service box_left">
                                   <h3>TOP banner</h3>
                                   <ul>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Hiển thị với kích thước cực lớn (630 px x 272 px)</li>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Vị trí: Đầu trang chủ</li>
                                   </ul>
                                   <div>
                                       <a href="http://baogia.timviecnhanh.com/data/uploads/2016/03/Hinh-anh-Banner-trang-chu.jpg" class="viewall button_ntd floatLeft mr10" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-picture"></i>Xem mô tả hình ảnh</a>
                                       <a href="http://baogia.timviecnhanh.com/mien-nam/bao-gia-banner/" class="viewall button_ntd floatLeft" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-dolla"></i>Tham khảo báo giá</a>
                                   </div>
                               </div>
                           </div>
                           <div class="box_services">
                               <div class="box_service box_right">
                                   <h3>Banner Trung tâm</h3>
                                   <ul>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Hiển thị với kích thước lớn 300 x 250</li>
                                       <li><i class="icon-sprite-ntd icon-arr-checked"></i>Vị trí: Trung tâm trang chủ</li>
                                   </ul>
                                   <div>
                                       <a href="http://baogia.timviecnhanh.com/data/uploads/2016/03/Hinh-anh-Banner-trang-chu.jpg" class="viewall button_ntd floatLeft mr10" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-picture"></i>Xem mô tả hình ảnh</a>
                                       <a href="http://baogia.timviecnhanh.com/mien-nam/bao-gia-banner/" class="viewall button_ntd floatLeft" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-dolla"></i>Tham khảo báo giá</a>
                                   </div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                       </div>
                       <!-- end box product service banner -->
   
                       <!-- box product service search -->
                       <div id="tabs-ps-search" class="content-tab-ntd" style="display: none;">
                           <div class="intro-ps">
                               <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_product_search_ntd.png" alt="">
                               <p>Lợi ích nổi bật khi dùng gói Tìm kiếm hồ sơ:</p>
                               <span>
                                - Truy cập kho dữ liệu hàng triệu hồ sơ người tìm việc.<br>
                                - Hồ sơ người tìm việc chi tiết và chất lượng.<br>
                                - Chủ động lựa chọn ứng viên phù hợp.</span>
                                <div class="box_service pl0 m-t-10">
                                   <div>
                                       <a href="http://baogia.timviecnhanh.com/bao-gia-goi-xac-thuc-va-loc-ho-so/" class="viewall button_ntd floatLeft mr10" title="" target="_blank"><i class="icon-sprite-ntd icon-arr-dolla"></i>Tham khảo báo giá</a>
                                       <a href="/timungvien" class="viewall button_ntd floatLeft " title=""><i class="icon-sprite-ntd icon-arr-search-small"></i>Tìm kiếm thử</a>
                                   </div>
                               </div>
                           </div><div class="clearfix"></div>
                       </div>
                       <!-- end box product service search -->
                   </div>
               </div>
           </div>
       </div>
       <!-- end box product service-->
   
       <!-- box recipes recruitment-->
       <div class="recipes-recruitment">
           <div class="container">
               <h2>BÍ QUYẾT TUYỂN DỤNG</h2>
               <div class="tab_ecipes_recruitment" id="recipes-recruitment">
                   <div id="tab-rr" class="tab-container" data-easytabs="true">
                     <ul class="etabs">
                       <li class="tab active tab-selected"><a href="#tabs-rr-post" class="active"><i class="icon-sprite-ntd icon-arr-post"></i>ĐĂNG TIN</a></li>
                       <li class="tab"><a href="#tabs-rr-banner"><i class="icon-sprite-ntd icon-arr-banner"></i>ĐĂNG BANNER</a></li>
                       <li class="tab"><a href="#tabs-rr-search"><i class="icon-sprite-ntd icon-arr-search"></i>TÌM KIẾM HỒ SƠ</a></li>
                     </ul>
                     <!-- tab recipes recruitment post -->
                     <div id="tabs-rr-post" class="content-tab-ntd active" style="display: block;">
                           <div class="intro-rr">
                               Đăng tin đúng quy định để nhanh được duyệt<br>
                               <span class="italic">(Tất cả các tin đăng lên Timviecnhanh.com sẽ được kiểm duyệt trước khi hiển thị trên website)</span>
                           </div>
                           <div class="clearfix"></div>
                           <div class="box_services">
                               <div class="box_service box_left center">
                                   <div class="img_rr_services"><a href="https://timviecnhanh.com/chu-y-khi-dang-tin-tuyen-dung.html" target="_blank">
                                       <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_post_price_ntd.png" alt="" class=""></a>
                                   </div>
                                   <div class="text_rr_des">
                                       <a href="#">Tin trả phí <span class="red">Duyệt ngay sau khi đăng tin</span></a>
                                   </div>
                               </div>
                           </div>
                           <div class="box_services">
                               <div class="box_service box_left center">
                                   <div class="img_rr_services"><a href="https://timviecnhanh.com/chu-y-khi-dang-tin-tuyen-dung.html" target="_blank">
                                       <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_post_free_ntd.png" alt="" class=""></a>
                                   </div>
                                   <div class="text_rr_des">
                                       <a href="#">Tin miễn phí Duyệt tin trong 24h</a>
                                   </div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="box_rr_policy">
                               <div class="box_title_content w_100 font16 pos_relative mb_10">
                                   <h2 class="title_title_box pl_8 pr_8 uppercase bold text_blue">Quy định chung</h2>
                               </div>
                               <div class="list_rr_policy">
                                   <ul>
                                       <li>
                                           <i class="icon-policy-ntd icon-arr-mor"></i>
                                           <span>Tin đăng hiển thị tại các vị trí nổi bật trong trang ngành nghề</span></li>
                                   </ul>
                               </div>
                               <div class="list_rr_policy">
                                   <ul>
                                       <li>
                                           <i class="icon-policy-ntd icon-arr-nolang"></i>
                                           <span>Trên 1 tin đăng chỉ trình bày 1 loại ngôn ngữ</span>
                                       </li>
                                   </ul>
                               </div>
                               <div class="list_rr_policy">
                                   <ul>
                                       <li>
                                           <i class="icon-policy-ntd icon-arr-tal"></i>
                                           <span>Tin đăng không chứa các ký tự là vô nghĩa (vd: $$$, ###, ...)</span>
                                       </li>
                                   </ul>
                               </div>
                               <div class="list_rr_policy">
                                   <ul>
                                       <li>
                                           <i class="icon-policy-ntd icon-arr-bek"></i>
                                           <span>Một tin tuyển dụng chỉ đăng thông tin cho một vị trí tuyển dụng</span>
                                       </li>
                                   </ul>
                               </div>
                               <div class="list_rr_policy">
                                   <ul>
                                       <li>
                                           <i class="icon-policy-ntd icon-arr-lit"></i>
                                           <span>Không bỏ trống các mục thông tin</span>
                                       </li>
                                   </ul>
                               </div>
                               <div class="list_rr_policy">
                                   <ul>
                                       <li>
                                           <i class="icon-policy-ntd icon-arr-nosou"></i>
                                           <span>Tin đăng chỉ được phép chứa các thông tin tuyển dụng, không được có các thông tin quảng cáo, tuyển sinh</span>
                                       </li>
                                   </ul>
                               </div>
                               <div class="clearfix"></div>
                               <div>
                                   <a class="link_detail" target="_blank" href="https://www.timviecnhanh.com/quy-dinh-duyet-tin">Xem chi tiết</a>
                               </div>
                           </div>
   
                           <div class="box_rr_note">
                               <div class="box_title_content w_100 font16 pos_relative mb_10">
                                   <h2 class="title_title_box pl_8 pr_8 uppercase bold text_blue">Những chú ý để tin đăng đạt hiệu quả cao</h2>
                               </div>
                               <div class="notePost">
                                   <table class="tableSolid">
                                       <tbody><tr class="noteTitle">
                                           <td colspan="1" class="col_none"></td>
                                           <td colspan="1" class="col_nen">NÊN</td>
                                           <td colspan="1" class="col_khongnen">KHÔNG NÊN</td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Tiêu đề tin đăng</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Để vị trí tuyển dụng và một yếu tố muốn nhấn mạnh.</span><br>
                                                   <span class="italic">VD: Nhân viên kinh doanh biết tiếng Nhật</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Tiêu đề quá chung chung.</span><br>
                                                           <span class="italic">VD: Nhân viên kinh doanh.</span>
                                                       </div>
                                                       <div class="textItem mt10">
                                                           <span class="bold">Tiêu đề quá dài, thiếu chuyên nghiệp.</span><br>
                                                           <span class="italic">VD: Nhân viên kinh doanh biết tiếng Nhật làm việc tại TP. Hồ Chí Minh.</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Ngành nghề</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Tích chọn tối đa số lượng ngành nghề cho phép để tăng mật độ hiển thị tin.</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Tích chọn các ngành nghề không liên quan đến vị trí tuyển dụng sẽ khiến tin tuyển dụng tiếp cận sai đối tượng.</span><br>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Các tiêu chí tích chọn (Mức lương, giới tính ...)</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Tích chọn chính xác.</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Tích chọn sai thông tin.</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Mô tả công việc</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Nêu được những nhiệm vụ chính mà người được tuyển dụng sẽ thực hiện.</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Mô tả công việc sơ sài, khiến ứng viên không hình dung được công việc và không nộp hồ sơ.</span>
                                                       </div>
                                                       <div class="textItem mt10">
                                                           <span class="bold">Mô tả công việc quá dài, quá nhiều thông tin, khiến ứng viên không muốn đọc và không nộp.</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Yêu cầu công việc</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Nêu rõ ràng và cụ thể các yêu cầu mà người được tuyển cần đáp ứng.</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Ghi sơ sài, không đủ thông tin, dẫn đến nhận được hồ sơ không phù hợp.</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Hạn nộp hồ sơ</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Để hạn nộp hồ sơ trong khoảng từ 1 đến 2 tuần.</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Đế hạn nộp hồ sơ quá dài sẽ khiến ứng viên chưa vội nộp hồ sơ mà ưu tiên các công việc đang cần gấp hơn trước.</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                       <tr class="subTitle">
                                           <td>Khái quát công ty</td>
                                           <td>
                                               <ul>
                                                   <li><i class="icon-sprite-ntd icon-arr-checked2"></i><span class="bold">Giới thiệu sơ lược về công ty: lĩnh vực hoạt động, sứ mệnh, mục tiêu và định hướng phát triển để thu hút ứng viên.</span></li>
                                               </ul>
                                           </td>
                                           <td>
                                               <ul>
                                                   <li>
                                                       <i class="icon-sprite-ntd icon-arr-delete"></i>
                                                       <div class="textItem">
                                                           <span class="bold">Bỏ trống hoặc ghi sơ sài, tạo cảm giác không tin tưởng cho ứng viên</span>
                                                       </div>
                                                   </li>
                                               </ul>
                                           </td>
                                       </tr>
                                   </tbody></table>
                               </div>
                           </div>
                       </div>
                     <!-- end tab recipes recruitment post -->
   
                     <!-- tab recipes recruitment banner -->
                     <div id="tabs-rr-banner" class="content-tab-ntd" style="display: none;">
                       <div class="intro-rr">
                           Những chú ý để Banner đạt hiệu quả cao
                       </div>
                       <div class="listPostBanner">
                           <div class="itemPostBanner">
                               <div class="info_ps">
                                   <div class="title"><span class="text-primary">Lưu ý 1:</span> Banner phải đúng kích cỡ</div>
                                   <p>Để tránh banner bị mờ, giãn, méo mó...bạn lưu ý thiết kế banner theo đúng kích thước quy định của Tìm Việc Nhanh</p>
                               </div>
                               <div class="info_ps">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_pic_ntd.png" alt="" class="">
                               </div>
                               <div class="info_ps last">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_falsepic1_ntd.png" alt="" class="">
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="line_grey"></div>
                           <div class="itemPostBanner">
                               <div class="info_ps">
                                   <div class="title"><span class="text-primary">Lưu ý 2:</span> Hình ảnh banner rõ nét</div>
                                   <p>Hình ảnh để thiết kế banner phải rõ nét. Tránh sử dụng các hình ảnh bị mờ, bị vỡ, bị nhoè... </p>
                               </div>
                               <div class="info_ps">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_pic_ntd.png" alt="" class="">
                               </div>
                               <div class="info_ps last">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_falsepic2_ntd.png" alt="" class="">
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="line_grey"></div>
                           <div class="itemPostBanner">
                               <div class="info_ps">
                                   <div class="title"><span class="text-primary">Lưu ý 3:</span> Sử dụng màu sắc hài hoà</div>
                                   <p>Màu sắc banner nên tươi sáng, hài hoà. Lạm dụng màu sắc quá tối hoặc quá sặc sỡ, loè loẹt sẽ khiến banner thiếu thẩm mỹ và không chuyên nghiệp</p>
                               </div>
                               <div class="info_ps">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_pic_ntd.png" alt="" class="">
                               </div>
                               <div class="info_ps last">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_falsepic3_ntd.png" alt="" class="">
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="line_grey"></div>
                           <div class="itemPostBanner">
                               <div class="info_ps">
                                   <div class="title"><span class="text-primary">Lưu ý 4:</span> Nội dung cô đọng, súc tích</div>
                                   <p>Nội dung banner cần cô đọng, súc tích. Chỉ nên nêu các thông tin chính nổi bật. Tránh đưa nhiều chứ lên banner. Tránh sử dụng chữ quá nhỏ trên banner.</p>
                               </div>
                               <div class="info_ps">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_pic2_ntd.png" alt="" class="">
                               </div>
                               <div class="info_ps last">
                                   <img src="https://cdn.timviecnhanh.com/asset/home/img/icon_sec_falsepic4_ntd.png" alt="" class="">
                               </div>
                           </div>
                           <div class="clearfix"></div>
                       </div>
                       <div class="clearfix"></div>
                       <!-- content -->
                     </div>
                     <!-- end tab recipes recruitment banner -->
   
                     <!-- end tab recipes recruitment banner -->
                     <div id="tabs-rr-search" class="content-tab-ntd" style="display: none;">
                       <div class="intro-rr">
                           Những chú ý khi lọc hồ sơ để không bỏ sót ứng viên tiềm năng
                       </div>
                       <div class="list_rr_search">
                           <div class="item_rr_search">
                               <div class="pic"><i class="icon-search-ntd icon-arr-keyword"></i></div>
                               <div class="info">
                                   <div class="title">Từ khoá</div>
                                   <div class="des">Hệ thống tìm kiếm bằng từ khoá của Timviecnhanh.com sẽ lấy ra các kết quả hồ sơ trên tiều đề có chưa từ khoá bạn nhập. Do đó, chỉ nên nhập các từ khóa mà chắc chắn ứng viên bạn cần tìm sẽ để từ khóa lên tiêu đề hồ sơ.</div>
                                   <div class="note">VD: Tiếng Trung, bác sĩ...</div>
                               </div>
                           </div>
                           <div class="item_rr_search">
                               <div class="pic"><i class="icon-search-ntd icon-arr-job"></i></div>
                               <div class="info">
                                   <div class="title">Ngành nghề</div>
                                   <div class="des">Nên lọc hồ sơ tại tất cả các ngành nghề mà ứng viên bạn đang cần tìm có thể chọn thay vì chỉ chọn một ngành nghề duy nhất.</div>
                                   <div class="note">VD: Lọc hồ sơ nhân viên kinh doanh, ngoài ngành nghề Kinh doanh có thể tìm thêm hồ sơ tại ngành Bán hàng, Phát triển thị trường...</div>
                               </div>
                           </div>
                           <div class="item_rr_search">
                               <div class="pic"><i class="icon-search-ntd icon-arr-langue"></i></div>
                               <div class="info">
                                   <div class="title">Ngoại ngữ</div>
                                   <div class="des">Chỉ sử dụng thông tin lọc này khi ngoại ngữ yêu cầu bắt buộc, không nên sử dụng nếu yếu tố này chỉ mang tính chất ưu tiên.</div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="item_rr_search">
                               <div class="pic"><i class="icon-search-ntd icon-arr-salary"></i></div>
                               <div class="info">
                                   <div class="title">Mức lương</div>
                                   <div class="des">Nhà tuyển dụng nên lọc thông tin mức lương sau khi đã xem thông tin hồ sơ ứng tuyển thay vì dùng công cụ lọc tự động. Lý do: Khi nhà tuyển dụng chọn mức lương, hệ thống sẽ lọc ra các hồ sơ có thông tin mức lương đúng yêu cầu.</div>
                                   <div class="note">VD: Nhà tuyển dụng cần tuyển vị trí với mức lương 7-10 triệu. Nếu chỉ lọc mức 7-10 triệu thì có thể bỏ lỡ các ứng viên mong muốn mức lương 5-7 triệu phù hợp với yêu cầu công việc.</div>
                               </div>
                           </div>
                           <div class="item_rr_search">
                               <div class="pic"><i class="icon-search-ntd icon-arr-level"></i></div>
                               <div class="info">
                                   <div class="title">Trình độ</div>
                                   <div class="des">Tương tự như mức lương, đây cũng là thông tin nhà tuyển dụng nên lọc sau khi đã xem thông tin hồ sơ ứng viên.</div>
                                   <div class="note">VD: Nhà tuyển dụng yêu cầu trình độ ứng viên là Cao đẳng nhưng nếu ứng viên trình độ Đại học đáp ứng được toàn bộ yêu cầu thì vẫn là ứng viên tiềm năng. Nếu dùng công cụ lọc tự động hệ thống chỉ cho ra kết quả hồ sơ ứng viên trình độ ca đẳng và nhà tuyển dụng sẽ bỏ lỡ các ứng viên trình độ đại học thích hợp.</div>
                               </div>
                           </div>
                           <div class="item_rr_search">
                               <div class="pic"><i class="icon-search-ntd icon-arr-exp"></i></div>
                               <div class="info">
                                   <div class="title">Kinh nghiệm</div>
                                   <div class="des">Tương tự thông tin mức lương, nhà tuyển dụng nên sử dụng khi bắt buộc ứng viên có mức kinh nghiệm đúng theo mức đã yêu cầu. Nếu không yêu cầu bắt buộc thì nên lọc thông tin này sau khi xem xét thông tin hồ sơ để tránh bỏ sót ứng viên có nhiều kinh nghiệm hơn mức kỳ vọng của nhà tuyển dụng đáp ứng được yêu câu.</div>
                                   <div class="note">VD: Nhà tuyển dụng yêu cầu 1 năm kinh nghiệm, nếu dùng công cự lọc thì sẽ bỏ lỡ các ứng viên trên 1 năm kinh nghiệm phù hợp với các yêu cầu khác.</div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                       </div>
                     </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- end box recipes recruitment-->
   
       <!-- box question answer -->
           <!-- end box question answer -->
   </div>
   <!-- end: BODY HOME -->
   <script type="text/javascript">
       /* add tab */
       $('#tab-ps').easytabs();
       $('#tab-rr').easytabs();
   
       /* expan */
       $('.open_cauhoi').click(function() {
           $(this).parent().find('.chitiet_cauhoi').slideToggle( "fast" );
           if($(this).parent().find('.icon_arrow_green_drop').hasClass('hidearr')){
               $(this).parent().find('.icon_arrow_green_drop').removeClass('hidearr');
               $(this).parent().find('.icon_arrow_green_drop').addClass('showarr');
           }else{
               $(this).parent().find('.icon_arrow_green_drop').removeClass('showarr');
               $(this).parent().find('.icon_arrow_green_drop').addClass('hidearr');
           }
           if($(this).parent().find('.chitiet_cauhoi').hasClass('active')){
               $(this).parent().find('.chitiet_cauhoi').removeClass('active');
           }else{
               $(this).parent().find('.chitiet_cauhoi').addClass('active');
           }
           if($(this).parent().find('.open_cauhoi').hasClass('active')){
               $(this).parent().find('.open_cauhoi').removeClass('active');
               $(this).parent().find('.icon_arrow_green_drop').removeClass('showarr');
               $(this).parent().find('.icon_arrow_green_drop').addClass('hidearr');
           }else{
               $(this).parent().find('.open_cauhoi').addClass('active');
               $(this).parent().find('.icon_arrow_green_drop').removeClass('hidearr');
               $(this).parent().find('.icon_arrow_green_drop').addClass('showarr');
           }
       });
   
   </script></section>
@endsection