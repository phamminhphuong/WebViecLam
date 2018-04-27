@extends('layout.index')
@section('nav')
    @include('layout.nav')
@endsection
@section('phieudangtuyen_hoso')
    @include('layout.phieudangtuyen_hoso')
@endsection
@section('menu_tuhoso')
    @include('layout.menu_tuhoso')
@endsection
 @section('content')

 <section class="body-home">
    <div class="container">
        <div class="col-xs-8 primary font14">
            <div class="inner-10">
                <div class="box-content">
                    					<header class="block-title">
						<h3 class="title font-roboto text-primary">
							<span class="text">Tạo hồ sơ</span>
							<span class="line"></span>
						</h3>
					</header>

					<div class="content-box group-collapse">
						<div class="required_input"><span class="icon-hoa-thi"></span> là hạng mục bắt buộc nhập</div>
						<br>
						<div class="avatar col-xs-2 offset20">
															<img src="https://cdn.timviecnhanh.com/asset/home/img/default.gif">
													</div>
						<div class="col-xs-6 offset20 push-left-20">
							<div class="info-user1">
								<p><span class="label">Họ tên: </span><b class="value text-primary">Phạm Minh Phương</b></p>

																	<p><span class="label">Số điện thoại: </span><b class="value text-primary">0962354147</b></p>
								
								<p><span class="label">Email: </span><b class="value text-primary">minhphuong7696@gmail.com</b></p>
							</div>

							<div class="text-left">
																<a href="https://www.timviecnhanh.com/nguoi-tim-viec/tai-khoan?url=aHR0cHM6Ly93d3cudGltdmllY25oYW5oLmNvbS9uZ3VvaS10aW0tdmllYy90YW8taG8tc28tbmV3" class="btn-grey-3 btn-edit">Chỉnh sửa</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<br>
					<div class="line-grey m-b-5" id="thong_bao_sc"></div>
                                        <form action="" method="POST" enctype="multipart/form-data" class="create-pro-form" id="form_ho_so">
                        <header class="block-title" id="block-title-seeker-info">
                            <h3 class="title_block_nored">
                                Thông tin cá nhân
                            </h3>
                        </header>
                        <article class="content-box group-collapse create-pro-form taohoso" id="div_tao_hs">
                                                    <div id="seeker-info">
                                <div class="group-field">
                                    <label class="label1">
                                        Ngày sinh <span class="icon icon-xs icon-hoa-thi"></span>
                                    </label>
                                    <div class="w253-inline">
                                        <div class="block-date-choose">
                                            <div class="select2-container ngay select-style w80" id="s2id_day"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">7</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen6"><div class="select2-drop select2-display-none day">   <div class="select2-search select2-search-hidden select2-offscreen">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="day" name="day" class="ngay select-style w80 select2-offscreen" data-diss="1" tabindex="-1">
	<option value="0">Ngày</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option selected="selected" value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>                                            <div class="select2-container thang select-style w80" id="s2id_month"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">6</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen7"><div class="select2-drop select2-display-none month">   <div class="select2-search select2-search-hidden select2-offscreen">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="month" name="month" class="thang select-style w80 select2-offscreen" data-diss="1" tabindex="-1">
	<option value="0">Tháng</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option selected="selected" value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>                                            <div class="select2-container nam select-style w80" id="s2id_year"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">1996</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen8"><div class="select2-drop select2-display-none year select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="year" name="year" class="nam select-style w80 select2-offscreen" tabindex="-1">
	<option value="0">Năm</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option selected="selected" value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
</select>                                            <div class="clearfix"></div>
                                                                                    </div>
                                    </div>
                                </div>
                                <div class="group-field">
                                    <label class="label1">
                                        Giới tính <span class="icon icon-xs icon-hoa-thi"></span>
                                    </label>
                                    <div class="w253-inline">
                                        <div class="style-button w218 mb0" style="">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_gender"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color: rgb(54, 54, 54);">Nam</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen9"><div class="select2-drop select2-display-none gender select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="gender" name="gender" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
	<option value=""> </option>
	<option selected="selected" value="Y">Nam</option>
	<option value="N">Nữ</option>
</select>                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="group-field" style="position: relative;margin-bottom: 8px;">
                                    <label class="label1" style="line-height: 40px;padding-top: 0">
                                        Hôn nhân <span class="icon icon-xs icon-hoa-thi"></span>
                                    </label>
                                    <span style="position: absolute;top: -3px;left: 200px;font-size: 10px"><i style="color: red">New</i></span>
                                    <div class="w253-inline">
                                        <div class="style-button w218 mb0" style="">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_married_status"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Chọn tình trạng hôn nhân</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen10"><div class="select2-drop select2-display-none married_status select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="married_status" name="married_status" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
	<option selected="selected" value="">Chọn tình trạng hôn nhân</option>
	<option value="N">Độc thân</option>
	<option value="Y">Đã có gia đình</option>
</select>                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="group-field">
                                    <label class="label1">
                                        Tỉnh/thành phố <span class="icon icon-xs icon-hoa-thi"></span>
                                    </label>
                                    <div class="w253-inline">
                                        <div class="style-button w218 mb0" style="">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_province"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen">Hà Nội</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen11"><div class="select2-drop select2-display-none province select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="province" name="province" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
	<option value=""> </option>
	<option value="1">Hồ Chí Minh</option>
	<option selected="selected" value="2">Hà Nội</option>
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
                                    <label class="label1">
                                        Chỗ ở hiện tại <span class="icon icon-xs icon-hoa-thi"></span>
                                    </label>
                                    <div class="w253-inline">
                                        <div class="style-button w218 mb0" style="">
                                            <input type="text" id="address" name="address" value="Quận Bắc Từ Liêm" class="w253 input-has-tooltip" placeholder="Nhập địa chỉ">                                                
                                                                                                <input type="hidden" name="seeker_missing_info" value="1">
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                                                </article>

                        <div class="line-grey m-b-5" id="thong_bao_sc"></div>
                                                <header class="block-title">
    						<h3 class="title_block_nored">
    							Thông tin chung
    						</h3>
    					</header>

                        <article class="content-box group-collapse create-pro-form taohoso" id="div_tao_hs">
                                    							<div class="group-field">
                                    <label for="" class="label1">
                                        Tiêu đề hồ sơ <span class="icon-hoa-thi"></span>
                                    </label>
    								<div class="group-right">
                                        <div class="style-button w260">
                                            <input type="text" id="title" name="title" class="w253 input-has-tooltip" placeholder="Ví dụ: Nhân viên kinh doanh">                                                
    
                                            <div class="block-has-tooltip">
                                                <div class="tooltip-huong-dan">
                                                    <p>
                                                        Hãy điền tên vị trí/ chức danh mà bạn muốn ứng tuyển.
                                                        <br>Ví dụ: Nhân viên kinh doanh, Trưởng phòng sản xuất
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
    								</div>
                                </div>
                                <div class="group-field">
                                    <label for="" class="label1">
                                        Trình độ cao nhất<span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_level"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn trình độ</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12"><div class="select2-drop select2-display-none level select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="level" name="level" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
	<option selected="selected" value="">Chọn trình độ</option>
	<option value="6">Đại học</option>
	<option value="5">Cao đẳng</option>
	<option value="4">Trung cấp</option>
	<option value="7">Cao học</option>
	<option value="3">Trung học</option>
	<option value="2">Chứng chỉ</option>
	<option value="1">Lao động phổ thông</option>
</select>                                                
                                            </div>
                                    </div>
                                </div>

                                <div class="group-field">
                                    <label class="label1">
                                        Số năm kinh nghiệm <span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_experience"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn kinh nghiệm</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen13"><div class="select2-drop select2-display-none experience select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="experience" name="experience" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
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
                                    <label class="label1">
                                        Cấp bậc hiện tại <span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_position_current"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn cấp bậc</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen14"><div class="select2-drop select2-display-none position_current select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="position_current" name="position_current" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
	<option selected="selected" value="100">Chọn cấp bậc</option>
	<option value="0">Nhân viên</option>
	<option value="7">CTV</option>
	<option value="8">Trưởng nhóm</option>
	<option value="9">Chuyên gia</option>
	<option value="3">Trưởng phó phòng</option>
	<option value="5">Quản lý cấp cao</option>
</select>                                                
                                            </div>
                                    </div>
                                </div>
                                <div class="group-field">
                                    <label class="label1">
                                        Cấp bậc mong muốn <span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <div class="select2-container select-style no-style-button w260" id="s2id_position"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">   <span class="select2-chosen" style="color: rgb(153, 153, 153);">Chọn cấp bậc</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen15"><div class="select2-drop select2-display-none position select2-with-searchbox">   <div class="select2-search">       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="position" name="position" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
	<option selected="selected" value="100">Chọn cấp bậc</option>
	<option value="0">Nhân viên</option>
	<option value="7">CTV</option>
	<option value="8">Trưởng nhóm</option>
	<option value="9">Chuyên gia</option>
	<option value="3">Trưởng phó phòng</option>
	<option value="5">Quản lý cấp cao</option>
</select>                                                
                                            </div>
                                    </div>
                                </div>
    							 <div class="group-field">
                                    <label class="label1">
                                        Ngành nghề mong muốn <span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <div class="select2-container select2-container-multi search-select select-style w260 input-has-tooltip" id="s2id_fields"><ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen16" style="width: 248px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none fields[]">   <ul class="select2-results">   <li class="select2-no-results">Không trùng khớp dữ liệu</li></ul></div></div><select id="fields" name="fields[]" class="search-select select-style w260 input-has-tooltip select2-offscreen" multiple="multiple" data-maximum="3" placeholder="Chọn ngành nghề" tabindex="-1">
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
</select>                                            <div class="block-has-tooltip">
    											<div class="tooltip-huong-dan">
    												<p>
    													Bạn được chọn tối đa 3 ngành nghề
    												</p>
    											</div>
    										</div>
    										    
                                            </div>
                                    </div>
                                </div>
                                <div class="group-field">
                                    <label class="label2">
                                        Mong muốn mức lương tối thiểu <i>(VNĐ/ tháng)</i> <span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <input type="text" id="salary_min" name="salary_min" class="w253 input-has-tooltip format-price price-to-text" placeholder="Nhập số" data-docso="#salary_words" data-docso-prefix="<i>" data-docso-suffix=" đồng</i>" autocomplete="off" data-real-amount="">                                                
                                                <div class="block-has-tooltip">
                                                <div class="tooltip-huong-dan">
                                                    <p>
                                                        Bạn vui lòng chỉ nhập số.
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="salary_words" class="salary_words"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="group-field">
                                    <label class="label1">
                                        Nơi làm việc mong muốn <span class="icon-hoa-thi"></span>
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                            <div class="select2-container select2-container-multi select-style search-select w260 input-has-tooltip" id="s2id_provinces"><ul class="select2-choices">  <li class="select2-search-field">    <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen17" style="width: 248px;">  </li></ul><div class="select2-drop select2-drop-multi select2-display-none provinces[]">   <ul class="select2-results">   <li class="select2-no-results">Không trùng khớp dữ liệu</li></ul></div></div><select id="provinces" name="provinces[]" class="select-style search-select w260 input-has-tooltip select2-offscreen" multiple="multiple" data-maximum="5" placeholder="Chọn nơi làm việc" tabindex="-1">
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
</select>                                            <div class="block-has-tooltip">
    											<div class="tooltip-huong-dan">
    												<p>
    													Bạn được chọn tối đa 5 địa điểm
    												</p>
    											</div>
    										</div>
    										    
                                            </div>
                                    </div>
                                </div>

                                
                                <div class="group-field m-b-5">
                                    <!--<label class="label w100" style="padding-right: 5px">&nbsp;</label>-->
                                    <div class="group-right">
                                        <div style="float: left;">
                                            <div class="iradio_minimal-aero" style="position: relative;"><input type="radio" name="is_search_allowed" id="is_search_allowed1" tabindex="1" value="Y" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        </div>
                                        <label for="is_search_allowed1" class="label w590 text-left p-t-0 p-l-10" style="padding-top: 0px;">Cho phép Nhà tuyển dụng tìm kiếm thông tin của bạn và chủ động liên hệ mời phỏng vấn</label>
                                    </div>
                                </div>
                                <div class="group-field m-b-5">
                                    <!--<label class="label w100" style="padding-right: 5px">&nbsp;</label>-->
                                    <div class="group-right">
                                        <div style="float: left;">
                                            <div class="iradio_minimal-aero" style="position: relative;"><input type="radio" name="is_search_allowed" id="is_search_allowed2" tabindex="1" value="N" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -10%; left: -10%; display: block; width: 120%; height: 120%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        </div>
                                        <label for="is_search_allowed2" class="label w590 text-left p-t-0 p-l-10" style="padding-top: 0px;">Không cho phép nhà tuyển dụng tìm kiếm. Hồ sơ này chỉ dùng để ứng tuyển</label>
                                    </div>
                                </div>
                                <!--error-->
                                <div class="group-field hidden" id="is_search_allowed_error">
                                    <div class="group-right" style="padding-right: 124px;">
                                        <span class="mess-input mess-error" data-type="error">Yêu cầu chọn trạng thái tìm kiếm hồ sơ</span>
                                    </div>
                                </div>
                                                                    <!--End error-->

                                <div class="group-field">
                                    <label class="label1">
                                    </label>
                                    <div class="group-right">
                                        <div class="style-button w260">
                                                                                            <div class="input-field exprience-submit pull-left ">
                                                    <button type="submit" class="btn btn-danger btn-big w160"><i class="icon_new icon-xs icon-save-new m-r-5" style="top:3px"></i>Lưu</button>
                                                    <span id="icon-loading" class="snake_loading hiden fix-icon-top-3"></span>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>

    							                                <input type="hidden" name="KMNJ61SGrVAdiaT" value="349ab9ef7ed5716941242bedc1948569">
                            						<div class="clearfix"></div>
                    </article>
                </form></div>
                
                <script>
                    $(document).ready(function () {
                        var showpopup = true;
                        $('form#form_ho_so').data('serialize',$('form#form_ho_so').serialize());
                        $("form#form_ho_so").on("submit", function(){
                            showpopup = false;
                        })
                        $(window).bind('beforeunload', function(e){
                            if($('form#form_ho_so').serialize() != $('form#form_ho_so').data('serialize') && showpopup == true){
                                return 'Changes you made may not be saved.';
                            }else {
                                e = null;
                            }
                        });
                    });
                </script>
				<div class="clearfix"></div>
            </div>
        </div>

        <div class="sidebar col-xs-4">
            <div class="inner-10">
                
<style>
.tool-ntd a .text{
    font-size: 97%;
}
</style>
<div class="block-sidebar">
    <header>
        <h3 class="title-sidebar font-roboto bg-primary m-0-auto m-t-0">
            Trung tâm quản lý
        </h3>
    </header>
    <div class="content-sidebar menu-trung-tam-ql">
        <ul>
            <li>
                <a href="https://www.timviecnhanh.com/nguoitimviec" title="Trang người tìm việc">
                    <span class="icon icon-sm icon-tu-hs"></span>
                    Trang người tìm việc
                </a>
            </li>
            <li class="has-child">
				<a href="https://www.timviecnhanh.com/nguoi-tim-viec/tu-ho-so-new"><span class="icon icon-sm icon-tao-hs"></span>Tủ hồ sơ</a>
            </li>
            <li>
                <a href="https://www.timviecnhanh.com/nguoi-tim-viec/tai-khoan"><span class="icon icon-sm icon-tai-khoan"></span>Tài khoản
                                    </a>
            </li>
            <li><a href="https://www.timviecnhanh.com/nguoi-tim-viec/danh-sach-ho-so-lam-dep"><span class="icon icon-sm icon-edit-cv icon-cv-green30"></span>Làm đẹp hồ sơ <span style="color: red; font-style: italic;">(New)</span></a></li>
            <li><a href="https://www.timviecnhanh.com/nguoi-tim-viec/viec-lam-da-luu"><span class="icon icon-sm icon-luu"></span>Việc làm đã lưu</a></li>
            <li><a href="https://www.timviecnhanh.com/nguoi-tim-viec/viec-lam-da-ung-tuyen"><span class="icon icon-sm icon-da-ung-tuyen"></span>Việc làm đã ứng tuyển</a></li>
            <li><a href="https://www.timviecnhanh.com/nguoi-tim-viec/nha-tuyen-dung-da-xem-ho-so"><span class="icon icon-sm icon-eye"></span>Nhà tuyển dụng đã xem hồ sơ</a></li>
            <li><a href="https://www.timviecnhanh.com/nguoi-tim-viec/xem-thong-bao-viec-lam"><span class="icon icon-sm icon-tao-hs"></span>Thiết lập thông báo việc làm</a></li>
            <li style="position: relative">
                <a href="https://www.timviecnhanh.com/nguoi-tim-viec/danh-sach-thong-bao-tu-he-thong">
                    <span class="icon icon-sm icon-notification_20"></span>
                    Ban quản trị thông báo
                                    </a>
            </li>
            <li><a href="https://www.timviecnhanh.com/nguoi-tim-viec/huong-dan-thao-tac-dg52.html"><span class="icon document_guide_blue_20 document_guide_green_20 icon-sm"></span>Hướng dẫn thao tác</a></li>
            <li class="logout"><a href="https://www.timviecnhanh.com/thoat"><span class="icon icon-sm icon-dang-xuat"></span>Đăng xuất</a></li>
        </ul>
    </div>
</div>                <!-- <div class="block-sidebar no-padding no-border">
    <div class="content-sidebar font0">
        <div class="fb-like-box" data-href="https://www.facebook.com/timviecnhanh" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
</div>
 -->            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
 @endsection