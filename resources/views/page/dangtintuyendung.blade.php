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
<section class="body-home">
    <div class="container">
        <div class="col-xs-8 primary form26">
            <div class="inner-10">
                <div class="box-content">
                    <div class="box_hoso_mienphi">
                        <p style="padding-top:14px;padding-left:14px;">Số lượng tin đăng miễn phí còn lại:
                            <span class="bold red">3</span>
                        </p>
                        <div class="box_hsmp_pink">Quý khách đang sử dụng tài khoản
                            <span class="bold">MIỄN PHÍ</span> bị giới hạn về số lượng tin đăng và quyền xem thông tin ứng viên.
                            <br> Hãy
                            <a href="http://baogia.timviecnhanh.com/" target="_blank">
                                <span class="bold red">Nâng cấp tài khoản</span>
                            </a>
                            để tuyển dụng nhanh và hiệu quả với nhiều quyền lợi hấp dẫn.
                        </div>
                        <div class="center fs12 pd-10">Để được hổ trợ vui lòng liên hệ bộ phận hổ trợ Nhà tuyển dụng của Tìm Việc Nhanh
                            <br>Hotline:
                            <span class="bold">024 7309 8888</span> hoặc
                            <span class="bold">028 7309 8888</span> - Email:
                            <span class="bold">ntd@timviecnhanh.com</span>
                        </div>
                    </div>
                </div>
                <form action="" method="POST" enctype="multipart/form-data" id="job_edit">
                    <input type="hidden" name="id" value="">
                    <div class="box-content">

                        <header class="block-title">
                            <h3 class="title font-roboto text-primary">
                                <span class="text">Đăng tin tuyển dụng</span>
                                <span class="line"></span>
                                <div class="pull-right">
                                </div>
                            </h3>
                        </header>

                        <article class="block-content outer-b-20 p-t-15">
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tiêu đề
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="title" name="title" class="input-has-tooltip" placeholder="Nhập tiêu đề">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Nêu chức danh/ vị trí cần tuyển
                                        </p>
                                        <p>
                                            <b>Ví dụ:</b>
                                            <br> - Nhân viên kinh doanh Bất động sản, Giám đốc điều hành...
                                        </p>
                                        <p>
                                            Bạn có thể đưa lên tiêu đề 1 số yêu cầu đặc biệt hay điều cần nhấn mạnh khác liên quan đến công việc nhưng không được quá
                                            dài và không được chứa các từ: "Gấp", "Cần tuyển", "Tuyển", "Hot".
                                        </p>
                                        <p>
                                            <b>Ví dụ:</b>
                                            <br> - Nhân viên bán hàng biết tiếng Nhật, Kỹ sư cầu đường trên 5 năm kinh nghiệm...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Số lượng cần tuyển
                                </label>
                                <input type="text" id="quantity" name="quantity" value="1" class="w100">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Giới tính
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button">
                                        <div class="select2-container select-style w130" id="s2id_gender">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn giới tính</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6">
                                            <div class="select2-drop select2-display-none gender select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="gender" name="gender" class="select-style w130 select2-offscreen" tabindex="-1">
                                            <option selected="selected" value="">Chọn giới tính</option>
                                            <option value="U">Không yêu cầu</option>
                                            <option value="Y">Nam</option>
                                            <option value="N">Nữ</option>
                                        </select>
                                        <div class="clearfix"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Mô tả công việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <textarea id="description" name="description" class="input-has-tooltip" style="height: 300px;" placeholder="Nhập mô tả công việc"></textarea>
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Mô tả một số nhiệm vụ, công việc chính mà người được tuyển sẽ thực hiện.
                                        </p>
                                        <p>
                                            <b>Ví dụ:</b>
                                            <br> - Soạn giáo án và giảng dạy tiếng Nhật cho các bạn du học sinh
                                            <br> - Biên phiên dịch và soạn thảo các văn bản, hợp đồng
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Yêu cầu công việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <textarea id="skill" name="skill" class="input-has-tooltip" style="height: 300px;" placeholder="Nhập yêu cầu công việc"></textarea>
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Liệt kê chi tiết những yêu cầu cần có đối với người ứng tuyển như: trình độ, kinh nghiệm, kỹ năng, ngoại hình, độ tuổi, sức
                                            khỏe...
                                        </p>
                                        <p>
                                            <b>Ví dụ:</b>
                                            <br> - Có trên 3 năm kinh nghiệm
                                            <br> - Khả năng giao tiếp tốt
                                            <br> - Tiếng Anh thành thạo
                                            <br> - Biết sử dụng phần mềm Photoshop
                                            <br> - Ngoại hình ưa nhìn cao từ 1m60 trở lên
                                            <br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tính chất công việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w280">
                                        <div class="select2-container select-style" id="s2id_attribute">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn tính chất công việc</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen7">
                                            <div class="select2-drop select2-display-none attribute select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="attribute" name="attribute" class="select-style select2-offscreen" tabindex="-1">
                                            <option selected="selected" value="">Chọn tính chất công việc</option>
                                            <option value="18">Giờ hành chính</option>
                                            <option value="10">Việc làm thu nhập cao</option>
                                            <option value="11">Việc làm thêm/Làm việc ngoài giờ</option>
                                            <option value="12">Thầu dự án/Freelance/Việc làm tự do</option>
                                            <option value="13">Việc làm online</option>
                                            <option value="14">Kinh doanh mạng lưới</option>
                                            <option value="15">Giúp việc gia đình</option>
                                            <option value="16">Hợp tác lao động/Nước ngoài</option>
                                            <option value="17">Việc làm người khuyết tật</option>
                                            <option value="19">Việc làm theo ca/Đổi ca</option>
                                            <option value="20">Việc làm cho trí thức lớn tuổi (trên 50 tuổi)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Trình độ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_level">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn trình độ</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8">
                                            <div class="select2-drop select2-display-none level select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="level" name="level" class="select-style select2-offscreen" tabindex="-1">
                                            <option selected="selected" value="">Chọn trình độ</option>
                                            <option value="6">Đại học</option>
                                            <option value="5">Cao đẳng</option>
                                            <option value="4">Trung cấp</option>
                                            <option value="7">Cao học</option>
                                            <option value="3">Trung học</option>
                                            <option value="2">Chứng chỉ</option>
                                            <option value="1">Lao động phổ thông</option>
                                            <option value="8">Không yêu cầu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Kinh nghiệm
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_experience">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn kinh nghiệm</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen9">
                                            <div class="select2-drop select2-display-none experience select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="experience" name="experience" class="select-style select2-offscreen"
                                            tabindex="-1">
                                            <option selected="selected" value="100">Chọn kinh nghiệm</option>
                                            <option value="0">Chưa có kinh nghiệm</option>
                                            <option value="7">Dưới 1 năm</option>
                                            <option value="1">1 năm</option>
                                            <option value="2">2 năm</option>
                                            <option value="3">3 năm</option>
                                            <option value="4">4 năm</option>
                                            <option value="5">5 năm</option>
                                            <option value="6">Trên 5 năm</option>
                                            <option value="8">Không yêu cầu kinh nghiệm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Mức lương
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_salary">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn mức lương</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen10">
                                            <div class="select2-drop select2-display-none salary select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="salary" name="salary" class="select-style select2-offscreen" tabindex="-1">
                                            <option selected="selected" value="">Chọn mức lương</option>
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
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="" style="width:170px !important">
                                    Mức hoa hồng ( nếu có )
                                </label>

                                <div class="group-right" style="width: 425px !important;margin-left:0px !important">
                                    <span class="span2">từ </span>
                                    <div style="" class="style-button">
                                        <input type="text" id="min_kickback" name="min_kickback" class="w100"> </div>
                                    <span class="span2">đến</span>
                                    <div style="" class="style-button">
                                        <input type="text" id="max_kickback" name="max_kickback" class="w100"> </div>
                                    %
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Hình thức làm việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_work_time">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn hình thức làm việc</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen11">
                                            <div class="select2-drop select2-display-none work_time select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="work_time" name="work_time" class="select-style select2-offscreen" tabindex="-1">
                                            <option selected="selected" value="">Chọn hình thức làm việc</option>
                                            <option value="1">Nhân viên chính thức</option>
                                            <option value="2">Nhân viên thời vụ</option>
                                            <option value="3">Bán thời gian</option>
                                            <option value="4">Làm thêm ngoài giờ</option>
                                            <option value="5">Thực tập và dự án</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Thời gian thử việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_probation_time">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn thời gian thử việc</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12">
                                            <div class="select2-drop select2-display-none probation_time select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="probation_time" name="probation_time" class="select-style select2-offscreen"
                                            tabindex="-1">
                                            <option selected="selected" value="100">Chọn thời gian thử việc</option>
                                            <option value="0">Nhận việc ngay</option>
                                            <option value="1">1 tháng</option>
                                            <option value="2">2 tháng</option>
                                            <option value="3">3 tháng</option>
                                            <option value="4">Trao đổi trực tiếp khi phỏng vấn</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">Quyền lợi
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <textarea id="benefit" name="benefit" class="input-has-tooltip" style="height: 300px;" placeholder="Nhập quyền lợi"></textarea>
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Nêu chi tiết về quyền lợi và phúc lợi mà người lao động sẽ được hưởng như: chế độ lương, thưởng, chế độ bảo hiểm, môi trường
                                            làm việc, cơ hội đào tạo và thăng tiến...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="group-field">
                                <label class="label-form" for="">
                                    Ngành nghề
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select2-container-multi search-select field-select input-has-tooltip" id="s2id_fields">
                                            <ul class="select2-choices">
                                                <li class="select2-search-field">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input select2-default" id="s2id_autogen14"
                                                        style="width: 208px;"> </li>
                                            </ul>
                                            <div class="select2-drop select2-drop-multi select2-display-none">
                                                <ul class="select2-results">
                                                    <li class="select2-no-results">Không trùng khớp dữ liệu</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <select id="fields" name="fields[]" class="search-select field-select input-has-tooltip select2-offscreen"
                                            placeholder="Chọn ngành nghề" multiple="multiple" tabindex="-1">
                                            <option value="32">Kinh doanh</option>
                                            <option value="10">Bán hàng</option>
                                            <option value="21">Chăm sóc khách hàng</option>
                                            <option value="33">Lao động phổ thông</option>
                                            <option value="47">Tài chính/Kế toán/Kiểm toán</option>
                                            <option value="35">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                                            <option value="29">Hành chính/Thư ký/Trợ lý</option>
                                            <option value="45">Quảng cáo/Marketing/PR</option>
                                            <option value="16">Cơ khí/Kĩ thuật ứng dụng</option>
                                            <option value="12">Báo chí/Biên tập viên</option>
                                            <option value="20">Bảo vệ/Vệ sĩ/An ninh</option>
                                            <option value="13">Bất động sản</option>
                                            <option value="14">Biên dịch/Phiên dịch</option>
                                            <option value="15">Bưu chính viễn thông</option>
                                            <option value="17">Công nghệ thông tin</option>
                                            <option value="18">Dầu khí/Địa chất</option>
                                            <option value="19">Dệt may</option>
                                            <option value="22">Điện/Điện tử/Điện lạnh</option>
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
                                            <option value="34">Luật/Pháp lý</option>
                                            <option value="36">Môi trường/Xử lý chất thải</option>
                                            <option value="37">Mỹ phẩm/Thời trang/Trang sức</option>
                                            <option value="38">Ngân hàng/Chứng khoán/Đầu tư</option>
                                            <option value="39">Nghệ thuật/Điện ảnh</option>
                                            <option value="56">Ngoại ngữ</option>
                                            <option value="40">Nhân sự</option>
                                            <option value="41">Nông/Lâm/Ngư nghiệp</option>
                                            <option value="64">PG/PB/Lễ tân</option>
                                            <option value="65">Phát triển thị trường</option>
                                            <option value="66">Phục vụ/Tạp vụ/Giúp việc</option>
                                            <option value="42">Quan hệ đối ngoại</option>
                                            <option value="44">Quản lý điều hành</option>
                                            <option value="46">Sản xuất/Vận hành sản xuất</option>
                                            <option value="60">Tài xế/Lái xe/Giao nhận</option>
                                            <option value="43">Thẩm định/Giám định/Quản lý chất lượng</option>
                                            <option value="48">Thể dục/Thể thao</option>
                                            <option value="49">Thiết kế/Mỹ thuật</option>
                                            <option value="50">Thời vụ/Bán thời gian</option>
                                            <option value="51">Thực phẩm/DV ăn uống</option>
                                            <option value="61">Trang thiết bị công nghiệp</option>
                                            <option value="62">Trang thiết bị gia dụng</option>
                                            <option value="63">Trang thiết bị văn phòng</option>
                                            <option value="11">Tư vấn bảo hiểm</option>
                                            <option value="52">Xây dựng</option>
                                            <option value="53">Xuất-Nhập khẩu/Ngoại thương</option>
                                            <option value="54">Y tế</option>
                                        </select>
                                        <div class="block-has-tooltip">
                                            <div class="tooltip-huong-dan">
                                                <p>Chọn tối đa 3 ngành nghề</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="group-field requirements_show" id="requirements_show" style="display: none;">
                                <label class="label-form" for="">Yêu cầu hồ sơ</label>
                                <textarea id="resume_requirements" name="resume_requirements" value="Ưu tiên nộp hồ sơ trực tuyến qua hệ thống của Timviecnhanh.com
Hoặc gửi CV mô tả quá trình học tập và làm việc về email liên hệ." class="input-has-tooltip" style="height: 300px;">Ưu tiên nộp hồ sơ trực tuyến qua hệ thống của Timviecnhanh.com
Hoặc gửi CV mô tả quá trình học tập và làm việc về email liên hệ.</textarea>
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Nhập những yêu cầu cần có trong hồ sơ như: Bản CV bằng tiếng Việt, Đơn xin việc, Sơ yếu lý lịch...
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="group-field">
                                <label class="label-form" for="">
                                    Nơi làm việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select2-container-multi search-select province-select input-has-tooltip" id="s2id_provinces">
                                            <ul class="select2-choices">
                                                <li class="select2-search-field">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input select2-default" id="s2id_autogen15"
                                                        style="width: 208px;"> </li>
                                            </ul>
                                            <div class="select2-drop select2-drop-multi select2-display-none">
                                                <ul class="select2-results">
                                                    <li class="select2-no-results">Không trùng khớp dữ liệu</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <select id="provinces" name="provinces[]" class="search-select province-select input-has-tooltip select2-offscreen"
                                            placeholder="Chọn nơi làm việc" multiple="multiple" tabindex="-1">
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
                                        <div class="block-has-tooltip">
                                            <div class="tooltip-huong-dan">
                                                <p>Chọn tối đa 5 nơi làm việc</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Hết hạn
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="pull-left w200">
                                    <div class="input-parent input-container">
                                        <div class="input-parent input-container">
                                            <input type="text" id="expired_at" name="expired_at" value="27-04-2018" class="w200 beatpicker-input beatpicker-inputnode"
                                                data-beatpicker="1" data-beatpicker-id="beatpicker-0" readonly="readonly" style="background-image: url(&quot;undefined&quot;);">
                                            <button class="beatpicker-clear beatpicker-clearButton button">Xóa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for=""></label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container w220 select-style" id="s2id_is_search_allowed">
                                            <a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
                                                <span class="select2-chosen">Hiển thị tin</span>
                                                <abbr class="select2-search-choice-close"></abbr>
                                                <span class="select2-arrow">
                                                    <b></b>
                                                </span>
                                            </a>
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen13">
                                            <div class="select2-drop select2-display-none is_search_allowed select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="is_search_allowed" name="is_search_allowed" class="w220 select-style select2-offscreen"
                                            tabindex="-1">
                                            <option value="N">Ẩn tin</option>
                                            <option selected="selected" value="Y">Hiển thị tin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <script>

                            </script> </article>
                    </div>

                    <div class="box-content">
                        <header class="block-title">
                            <h3 class="title font-roboto text-primary">
                                <span class="text">Thông tin liên hệ</span>
                                <span class="line"></span>
                                <div class="pull-right"></div>
                            </h3>
                        </header>

                        <article class="block-content outer-b-20">
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tên người liên hệ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="contact_name" name="contact_name" value="Hoàng Văn Anh" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Nhập tên người hoặc bộ phận phụ trách tuyển dụng.
                                            <br>
                                            <b>Ví dụ:</b> Ms Hoa, Mr. Nguyễn Văn An, Phòng nhân sự...
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Email
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="contact_email" name="contact_email" value="phamminhphuong7696@gmail.com" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Nhập địa chỉ email mà người tìm việc có thể dùng để liên hệ với người phụ trách tuyển dụng. Hồ sơ các ứng viên ứng tuyển
                                            cũng sẽ được gửi tới địa chỉ email này.
                                            <br>
                                            <b>Ví dụ:</b> lienhe@timviecnhanh.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Địa chỉ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="contact_address" name="contact_address" value="Bắc Từ Liêm" class="input-has-tooltip">
                                <div class="block-has-tooltip">
                                    <div class="tooltip-huong-dan">
                                        <p>
                                            Nhập địa chỉ công ty của bạn hoặc địa chỉ mà người tìm việc có thể tới để liên hệ với người phụ trách tuyển dụng.
                                            <br>
                                            <b>Ví dụ:</b> Lầu 6, Tòa nhà Bitexco Nam Long, 63A Võ Văn Tần, P.6, Q.3, TP. Hồ
                                            Chí Minh
                                        </p>
                                    </div>
                                </div>
                            </div>



                            <div class="has-clone">
                                <div id="phone-main" class="group-field block-phone-clone item-clone">
                                    <label for="" class="label-form ">Điện thoại
                                        <span class="icon icon-xs icon-hoa-thi"></span>
                                    </label>
                                    <div class="block-phone">
                                        <input type="hidden" id="" data-name="prefix" name="contact_phone[1][prefix]" class="phone_prefix" value="+84">
                                        <input type="text" id="" data-name="number" name="contact_phone[1][number]" data-length="50" class="main-number" value="1234567891"
                                            placeholder="Ví dụ: 0838981030">
                                        <input type="hidden" id="" data-name="ext" name="contact_phone[1][ext]" data-length="5" class="ext" placeholder="Ví dụ: 113">
                                    </div>
                                    <div class="text-right">
                                        <a href="" class="add-group text-primary ">Thêm số điện thoại</a>
                                    </div>
                                </div>
                            </div>


                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $(document).on('click', '.add-group', function (e) {
                                        e.preventDefault();

                                        var $cloned = $(this).closest('.group-field').clone();
                                        $(this).addClass('text-danger remove-group').removeClass('text-primary add-group').text('Xóa số này');

                                        $cloned.find('label').css('font-size', 0);
                                        $cloned.find('span').css('display', 'none');
                                        var ids = new Date().getTime();

                                        $cloned.find('input').each(function () {
                                            var name = 'contact_phone[' + ids + '][' + $(this).data('name') + ']';
                                            $(this).attr('name', name);
                                            $(this).val('');
                                        });

                                        $(this).closest('.group-field').after($cloned);
                                        checkNumber();
                                    });

                                    $(document).on('click', '.add-group-mobile', function (e) {
                                        e.preventDefault();

                                        var $cloned = $(this).closest('.group-field').clone();
                                        $(this).addClass('text-danger remove-group').removeClass('text-primary add-group-mobile').text('Xóa số này');

                                        $cloned.find('label').css('font-size', 0);
                                        var ids = new Date().getTime();

                                        $cloned.find('input').each(function () {
                                            var name = 'contact_mobile[' + ids + ']';
                                            $(this).attr('name', name);
                                        });

                                        $(this).closest('.group-field').after($cloned);
                                        checkNumber();
                                    });
                                });

                                $(document).on('click', '.remove-group', function (e) {
                                    e.preventDefault();

                                    $(this).closest('.group-field').fadeOut('fast', function () {
                                        $(this).remove();
                                    });

                                    if ($(this).closest('.group-field').index() == 0) {
                                        $(this).closest('.has-clone').find('.item-clone').eq(1).find('label').css({ 'font-size': '14px' });
                                    } else {
                                        $(this).closest('.has-clone').find('.item-clone').eq(0).find('label').css({ 'font-size': '14px' });
                                    }
                                });
                            </script>

                            <style type="text/css">
                                .form26 .block-phone .main-number {
                                    margin-left: 0px;
                                }
                            </style>


                            <div class="group-field">
                                <label class="label-form" for=""></label>
                                <div class="group-right">
                                    <button name="submit_preview" type="submit" class="btn btn-big btn-bgwhite-tblue mr10 w140 p0" id="submit_preview" value="2">
                                        <span class="icon_ntd icon-sm icon_job_view_2017"></span>Xem trước
                                    </button>
                                    <button name="submit_new" type="submit" class="btn btn-big btn-danger ml10 w140" id="submit_new" value="1">
                                        <span class="sprite_icn_large_2017 icon-sm icon_job_add_2017"></span>Đăng tin
                                    </button>

                                    <!--<a href="" class="btn btn-big btn-primary" style="margin-left: 10px;">
                                    Trở lại
                                </a>-->
                                </div>
                            </div>
                        </article>
                    </div>

                    <input type="hidden" name="G4hW7AJISijjCg8" value="d9b124ec72e5c534cfc1898e3fb716b2">
                </form>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            <div class="inner-10">

                <div class="block-sidebar">
                    <header>
                        <h3 class="title-sidebar font-roboto bg-primary">
                            Trung tâm quản lý
                        </h3>
                    </header>
                    <div class="content-sidebar menu-trung-tam-ql">
                        <ul>
                            <li>
                                <a href="https://www.timviecnhanh.com/timungvien" title="Tìm hồ sơ ứng viên">
                                    <span class="icon_menu_s22 icon-sm icon-tkuv_s22"></span>
                                    Tìm hồ sơ ứng viên
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/tai-khoan" title="Tài khoản">
                                    <span class="icon_menu_s22 icon-sm icon-tkhoan_s22"></span>
                                    Tài khoản
                                    <span class="red" style="font-weight: normal;">
                                        <i>&nbsp;(Chờ duyệt)</i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nhatuyendung" title="Trang nhà tuyển dụng">
                                    <span class="icon_menu_s22 icon-sm icon-tntd_s22"></span>
                                    Trang nhà tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/dang-tin?pages=1" title="Đăng tin tuyển dụng" class="">
                                    <span class="icon_menu_s22 icon-sm icon-dttd_s22"></span>
                                    Đăng tin tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/quan-ly-tin-dang" title="Quản lý tin tuyển dụng">
                                    <span class="icon_menu_s22 icon-sm icon-qltd_s22"></span>
                                    Quản lý tin tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/ho-so-da-luu" title="Hồ sơ đã lưu">
                                    <span class="icon_menu_s22 icon-sm icon-hsdl_s22"></span>
                                    Hồ sơ đã lưu
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/ho-so-da-ung-tuyen" title="Hồ sơ đã ứng tuyển">
                                    <span class="icon_menu_s22 icon-sm icon-hsdut_s22"></span>
                                    Hồ sơ đã ứng tuyển
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/xem-thiet-lap-thong-tin-nhan-ho-so-bang-email" title="Thiết lập thông báo hồ sơ">
                                    <i class="fa fa-pencil-square-o font26 fix-icon-style-1"></i>
                                    Thiết lập thông báo hồ sơ
                                </a>
                            </li>

                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/xem-giay-phep-kinh-doanh" title="Giấy phép kinh doanh">
                                    <span class="icon_menu_s22 icon-sm icon-cover_s22"></span>
                                    Giấy phép kinh doanh
                                </a>
                            </li>
                            <li style="position: relative">
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/danh-sach-thong-bao-tu-he-thong" title="Ban quản trị thông báo">
                                    <span class="icon-notification-green_20 icon-sm icon_menu_s22"></span>
                                    Ban quản trị thông báo
                                    <span style="line-height: 16px;background: red;padding: 0px 3px;color: #fff;font-size: 11px;position: absolute;text-align: center;top: 5px;left: 32px;font-weight: normal">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.timviecnhanh.com/nha-tuyen-dung/huong-dan-thao-tac-dg53.html" title="Hướng dẫn thao tác">
                                    <span class="icon icon-ntd icon-sm icon-features-diff"></span>
                                    Hướng dẫn thao tác
                                </a>
                            </li>
                            <li class="logout">
                                <a href="https://www.timviecnhanh.com/thoat" title="Đăng xuất">
                                    <span class="icon icon-sm icon-dang-xuat"></span>
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="block-ads outner-top-10">
                    <a href="">
                        <img alt="Banner hotline" src="https://cdn.timviecnhanh.com/asset/home/img/hotline-TVN-171215-bac-min2.png">
                    </a>
                </div>
                <a href="https://timviecnhanh.com/chu-y-khi-dang-tin-tuyen-dung.html" class="btn btn-big btn-chu-y-sd" target="_blank">
                    <span class="icon icon-sm"></span>
                    Chú ý khi đăng tin tuyển dụng
                </a>

                <!-- <div class="block-sidebar no-padding no-border">
    <div class="content-sidebar font0">
        <div class="fb-like-box" data-href="https://www.facebook.com/timviecnhanh" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
</div>
 --></div>
        </div>
        <div class="clearfix"></div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            var showpopup = true;
            $('form#job_edit').data('serialize', $('form#job_edit').serialize());
            $("form#job_edit").on("submit", function () {
                showpopup = false;
            })
            $(window).bind('beforeunload', function (e) {
                if ($('form#job_edit').serialize() != $('form#job_edit').data('serialize') && showpopup == true) {
                    return 'Changes you made may not be saved.';
                } else {
                    e = null;
                }
            });

            var search_box_select_ids = ['level', 'experience', 'attribute', 'work_time', 'salary', 'requirement_job', 'gender', 'probation_time'];
            var i = 0;
            for (i = 0; i < search_box_select_ids.length; ++i) {
                if (!$('#' + search_box_select_ids[i]).length || !$('#s2id_' + search_box_select_ids[i]).length) {
                    continue;
                }

                if ($('#' + search_box_select_ids[i]).val() == '' || $('#' + search_box_select_ids[i]).val() == 100) {
                    $('#s2id_' + search_box_select_ids[i]).find('.select2-choice').find('.select2-chosen').css({ 'color': '#999', 'font-weight': '' });
                } else {
                    $('#s2id_' + search_box_select_ids[i]).find('.select2-choice').find('.select2-chosen').css({ 'color': '#363636', 'font-weight': '' });
                }

                $('#' + search_box_select_ids[i]).on("change", function () {
                    if ($(this).val() == '' || $('#' + search_box_select_ids[i]).val() == 100) {
                        $('#s2id_' + $(this).attr('id')).find('.select2-choice').find('.select2-chosen').css({ 'color': '#999', 'font-weight': '' });
                    } else {
                        $('#s2id_' + $(this).attr('id')).find('.select2-choice').find('.select2-chosen').css({ 'color': '#363636', 'font-weight': '' });
                    }
                });
            }

            $("form#job_edit").submit(function () {
                document.getElementById("submit_new").disabled = true;
            });
        });
        $(document).ready(function () {
            $('.field-select').select2({
                allowClear: true,
                maximumSelectionSize: 3
            });
            $('.province-select').select2({
                allowClear: true,
                maximumSelectionSize: 5
            });
            $('.requirements_show').hide();
        });

        $('select[id=fields]').change(function () {
            var requirements_show = false;
            var fields_array = ['66', '59', '60', '20', '33'];
            var str = $(this).val();
            if (str != null && str != undefined && str.length) {
                for (var i = 0; i < str.length; i++) {
                    var fields_index = fields_array.indexOf(str[i]);
                    if (fields_index >= 0) {
                        var requirements_show = true;
                    }
                }
            }

            if (requirements_show) {
                $('.requirements_show').show();
            } else {
                $('.requirements_show').hide();
            }
        });
    </script>

</section>
@endsection