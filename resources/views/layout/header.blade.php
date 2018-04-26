 <header class="header-site" id="header">
        <div class="container menu-header-first">
            <div class="col-xs-12">
                <ul class="menu-header">
                    <li>
                        <div class="block-location-top">
                            <span class="icon icon-xs icon-location"></span>
                            <select name="location" class="select-style" id="location" data-disS="1">
                                <option value="1" selected="selected">Miền Bắc</option>
                                <option value="2">Miền Nam</option>
                            </select>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#location').on('change', function () {
                                        window.location.href = 'https://ww' + 'w.timviecn' + 'hanh.com/' + 'location?url_redirect=http%3A%2F%2Fwww.timviecnhanh.com%2F' + '&location=' + $(this).val();
                                    });
                                });
                            </script>
                        </div>
                    </li>

                    <li>
                        <a href="tel:02473098888" class="hotline" title="Hotline">
                            <i class="icon icon-call icon-xs"></i>
                            Hotline:
                            <b>(024) 7309 8888</b>
                        </a>
                    </li>

                    <li>
                        <a href="index.html" title="Tim viec lam nhanh, tìm kiếm việc làm, tuyển dụng lương cao">
                            <i class="icon-sprite-hs icon-head-home"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li class="active">
                        <a rel="nofollow" href="index.html" title="Tim viec lam nhanh, tìm kiếm việc làm, tuyển dụng lương cao">
                            <i class="icon-sprite-hs icon-head-ntv"></i>
                            Người tìm việc
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="nhatuyendung.html" title="Trang nhà tuyển dụng">
                                <i class="icon-sprite-hs icon-head-ntv"></i>
                            Nhà tuyển dụng
                        </a>
                    </li>
                    <li>
                        <a href="goc-nghe-nghiep/indexc990.html?utm_source=timviecnhanh.com&amp;utm_medium=referral&amp;utm_campaign=site-timviecnhanh.com&amp;utm_content=menu-header"
                            title="Góc nghề nghiệp">
                            <i class=" icon-goc-nghe-nghiep "></i>
                            Góc nghề nghiệp
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="action-header">
                    <li>
                        <div class="logo">
                            <h1>
                                <a href="index.html" title="Tim viec lam nhanh, tìm kiếm việc làm, tuyển dụng lương cao">
                                    <img src="" alt="Tim viec nhanh" title="Tim viec nhanh tuyển dụng việc làm 24h lương cao">
                                </a>

                            </h1>
                        </div>
                    </li>
                    <li>
                        <form id="job_advance_search" role="form" action="https://www.timviecnhanh.com/vieclam/timkiem" method="GET" class="form-inline form-search-top"
                            enctype="multipart/form-data">
                            <input type="text" id="key-s" name="tu_khoa" value="" class="form-control col-xs-" placeholder="Nhập tên công việc, vị trí...">
                            <div class="style-flat">
                                <select name="nganh_nghe[]" class="select-style">
                                    <option value="">Chọn ngành nghề</option>
                                    @foreach($chuyennganh as $cn)
                                        <option value="{!!$cn->id!!}">{!!$cn->TenNganh!!}</option>
                                    @endforeach
                                    {{--  <option value="32">Kinh doanh</option>
                                    <option value="10">Bán hàng</option>
                                    <option value="21">Chăm sóc khách hàng</option>
                                    <option value="33">Lao động phổ thông</option>
                                    <option value="47">Tài chính/Kế toán/Kiểm toán</option>
                                    <option value="29">Hành chính/Thư ký/Trợ lý</option>
                                    <option value="35">Sinh viên/Mới tốt nghiệp/Thực tập</option>
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
                                    <option value="54">Y tế</option>  --}}
                                </select>
                            </div>

                            <div class="style-flat tt">
                                <select name="tinh_thanh[]" class="select-style">
                                    <option value="">Chọn tỉnh thành</option>
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

                            <button id="base_search" type="submit" class="btn submit btn-danger col-xs-">
                                <i class="icon icon-xs icon-search"></i>
                            </button>
                            <button id="advance_search" type="submit" class="plush fix-box">
                                <i class="icon-sprite-hs icon-head-add"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="menu-header-nth" id="menu-header-nth">
                <div class="container relative">
                    <div class="col-xs-12">
                        <ul class="list-menu-nth">
                             @foreach($chuyennganh as $cn)
                                <li>
                                    <a href="viec-lam-kinh-doanh-c32.html" title="Kinh doanh">
                                        {!!$cn->TenNganh!!}
                                        {{--  <i class="icon-sprite-hs icon-arr-head"></i>  --}}
                                       <i class="fas fa-angle-right icon-arr-head"></i>
                                    </a> 
                                </li>
                              @endforeach
                            <li>
                                <a href="viec-lam/danh-sach-nganh.html">
                                    <i class="icon-sprite-hs icon-arr-go-head"></i>
                                    Xem ngành khác
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>