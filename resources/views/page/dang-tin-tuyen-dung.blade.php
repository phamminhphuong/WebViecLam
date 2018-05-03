@extends('layout.index')
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
                <form action="dang-tin" method="POST" enctype="multipart/form-data" id="job_edit">
                    
                    <div class="box-content">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <header class="block-title">
                            <h3 class="title font-roboto text-primary">
                                <span class="text">Đăng tin tuyển dụng</span>
                                <span class="line"></span>
                                <div class="pull-right">
                                </div>
                            </h3>
                        </header>
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
                        <br>
                        <article class="block-content outer-b-20 p-t-15">
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Tiêu đề
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="title" name="TieuDe" class="input-has-tooltip" placeholder="Nhập tiêu đề">
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
                                    Vị trí tuyển dụng
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="title" name="ViTriTuyenDung" class="input-has-tooltip" placeholder="Nhập vị trí tuyển dụng">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Số lượng cần tuyển
                                </label>
                                <input type="number" id="quantity" style="width:435px" name="SoLuongTuyenDung" value="1">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Mô tả công việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <textarea id="description" name="MoTaCV" class="input-has-tooltip" style="height: 300px;" placeholder="Nhập mô tả công việc"></textarea>
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
                                    Trình độ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_level">
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8">
                                            <div class="select2-drop select2-display-none level select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="level" name="MaTrinhDo"  tabindex="-1" style="margin-top:-20px;width:455px;height:32px">
                                            <option selected="selected" value="">Chọn trình độ</option>
                                            @foreach($trinhdo as $td)
                                             <option value="{!!$td->id!!}">{!!$td->TenTrinhDo!!}</option>
                                            @endforeach
                                        </select>
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
                                        <div class="select2-container select-style" id="s2id_level">
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8">
                                            <div class="select2-drop select2-display-none level select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="level" name="MaNganh"  tabindex="-1" style="margin-top:-20px;width:455px;height:32px">
                                            <option selected="selected" value="">Chọn ngành nghề</option>
                                            @foreach($chuyennganh as $cn)
                                             <option value="{!!$cn->id!!}">{!!$cn->TenNganh!!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Ngành chứng chỉ
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <div class="group-right">
                                    <div style="" class="style-button w220">
                                        <div class="select2-container select-style" id="s2id_level">
                                            <input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8">
                                            <div class="select2-drop select2-display-none level select2-with-searchbox">
                                                <div class="select2-search">
                                                    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off"
                                                        spellcheck="false" class="select2-input"> </div>
                                                <ul class="select2-results"> </ul>
                                            </div>
                                        </div>
                                        <select id="level" name="MaChungChi" style="margin-top:-20px;width:455px;height:32px" tabindex="-1" style="margin-top:-20px;">
                                            <option selected="selected" value="">Chọn chứng chỉ</option>
                                            @foreach($chungchi as $cc)
                                                <option value="{!!$cc->id!!}">{!!$cc->TenChungChi!!}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="group-field">
                                <label class="label-form" for="">   
                                    Kinh nghiệm
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="title" name="YeuCauKinhNghiem" class="input-has-tooltip" placeholder="Yêu cầu kinh nghiệm">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Nơi làm việc
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="text" id="title" name="NoiLamViec" class="input-has-tooltip" placeholder="Nhập nơi làm việc">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Mức lương
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                <input type="number" id="quantity" style="width:435px" name="LuongKhoiDiem" value="0">
                            </div>
                            <div class="group-field">
                                <label class="label-form" for="">
                                    Hết hạn
                                    <span class="icon icon-xs icon-hoa-thi"></span>
                                </label>
                                 <input type="date" name="ThoiHanNopHoSo" class="form-control">
                            </div>
                           
                            <div class="group-field">
                                <label class="label-form" for=""></label>
                                <div class="group-right">
                                    <button name="submit_preview" type="submit" class="btn btn-big btn-bgwhite-tblue mr10 w140 p0" id="submit_preview" value="2">
                                        Xem trước
                                    </button>
                                    <button name="submit_new" type="submit" class="btn btn-big btn-danger ml10 w140" id="submit_new" value="1">
                                        Đăng tin
                                    </button>
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
                            <!-- <li>
                                <a href="tim-ho-so" title="Tìm hồ sơ ứng viên">
                                    <span class="icon_menu_s22 icon-sm icon-tkuv_s22"></span>
                                    Tìm hồ sơ ứng viên
                                </a>
                            </li>
                            <li>
                                <a href="tai-khoan" title="Tài khoản">
                                    <span class="icon_menu_s22 icon-sm icon-tkhoan_s22"></span>
                                    Tài khoản
                                    <span class="red" style="font-weight: normal;">
                                        <i>&nbsp;(Chờ duyệt)</i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="nha-tuyen-dung" title="Trang nhà tuyển dụng">
                                    <span class="icon_menu_s22 icon-sm icon-tntd_s22"></span>
                                    Trang nhà tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="dang-tin" title="Đăng tin tuyển dụng" class="">
                                    <span class="icon_menu_s22 icon-sm icon-dttd_s22"></span>
                                    Đăng tin tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="quan-ly-tin-dang" title="Quản lý tin tuyển dụng">
                                    <span class="icon_menu_s22 icon-sm icon-qltd_s22"></span>
                                    Quản lý tin tuyển dụng
                                </a>
                            </li>
                            <li>
                                <a href="ho-so-da-luu" title="Hồ sơ đã lưu">
                                    <span class="icon_menu_s22 icon-sm icon-hsdl_s22"></span>
                                    Hồ sơ đã lưu
                                </a>
                            </li>
                            <li>
                                <a href="ho-so-da-ung-tuyen" title="Hồ sơ đã ứng tuyển">
                                    <span class="icon_menu_s22 icon-sm icon-hsdut_s22"></span>
                                    Hồ sơ đã ứng tuyển
                                </a>
                            </li>
                            <li>
                                <a href="xem-thiet-lap-thong-tin-nhan-ho-so-bang-email" title="Thiết lập thông báo hồ sơ">
                                    <i class="fa fa-pencil-square-o font26 fix-icon-style-1"></i>
                                    Thiết lập thông báo hồ sơ
                                </a>
                            </li>

                            <li>
                                <a href="xem-giay-phep-kinh-doanh" title="Giấy phép kinh doanh">
                                    <span class="icon_menu_s22 icon-sm icon-cover_s22"></span>
                                    Giấy phép kinh doanh
                                </a>
                            </li>
                            <li style="position: relative">
                                <a href="danh-sach-thong-bao-tu-he-thong" title="Ban quản trị thông báo">
                                    <span class="icon-notification-green_20 icon-sm icon_menu_s22"></span>
                                    Ban quản trị thông báo
                                    <span style="line-height: 16px;background: red;padding: 0px 3px;color: #fff;font-size: 11px;position: absolute;text-align: center;top: 5px;left: 32px;font-weight: normal">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="huong-dan-thao-tac" title="Hướng dẫn thao tác">
                                    <span class="icon icon-ntd icon-sm icon-features-diff"></span>
                                    Hướng dẫn thao tác
                                </a>
                            </li> -->
                            <li class="logout">
                                <a href="dang-xuat" title="Đăng xuất">
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
                <a href="chu-y-dang-tin-tuyen-dung" class="btn btn-big btn-chu-y-sd" target="_blank">
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