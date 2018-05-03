@extends('layout.index') @section('nav') @include('layout.nav') @endsection @section('phieudangtuyen_hoso') @include('layout.phieudangtuyen_hoso')
@endsection @section('menu_tuhoso') @include('layout.menu_tuhoso') @endsection @section('content')

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
						<div class="required_input">
							<span class="icon-hoa-thi"></span> là hạng mục bắt buộc nhập</div>
						<br>
						<div class="avatar col-xs-2 offset20">
							<img src="image_HoSo/{!!$hoSo->HinhAnh!!}">
						</div>
						<div class="col-xs-6 offset20 push-left-20">
							<div class="info-user1">
								<p>
									<span class="label">Họ tên: </span>
									<b class="value text-primary">{!!$hoSo->HoTen!!}</b>
								</p>
								<p>
									<span class="label">Số điện thoại: </span>
									<b class="value text-primary">{!!$hoSo->DienThoai!!}</b>
								</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					@if(count($errors) >0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $er) {{$er}}
						<br> @endforeach
					</div>
					@endif @if(!empty($messageSuccess))
					<div class="alert alert-success">
						{!!$messageSuccess!!}
					</div>
					@endif
					<br>
					<div class="line-grey m-b-5" id="thong_bao_sc"></div>
					<form action="tao-ho-so" method="POST" enctype="multipart/form-data" class="create-pro-form" id="form_ho_so">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<header class="block-title" id="block-title-seeker-info">
							<h3 class="title_block_nored">
								Thông tin cá nhân
							</h3>
						</header>
						<article class="content-box group-collapse create-pro-form taohoso" id="div_tao_hs">
							<div id="seeker-info">
								<div class="group-field">
									<label class="label1">
										Họ tên
										<span class="icon icon-xs icon-hoa-thi"></span>
									</label>
									<input type="text" name="HoTen" class="w253 input-has-tooltip" value="{!!$hoSo->HoTen!!}" />
									<div class="clearfix"></div>
								</div>
								<div class="group-field">
									<label class="label1">
										Số điện thoại
										<span class="icon icon-xs icon-hoa-thi"></span>
									</label>
									<input type="text" name="DienThoai" class="w253 input-has-tooltip" value="{!!$hoSo->DienThoai!!}" />
									<div class="clearfix"></div>
								</div>
								<div class="group-field">
									<label class="label1">
										Hình ảnh
										<span class="icon icon-xs icon-hoa-thi"></span>
									</label>
									<input type="file" name="HinhAnh" class="w253 input-has-tooltip" />
									<div class="clearfix"></div>
								</div>
								<div class="group-field">
									<label class="label1">
										Ngày sinh
										<span class="icon icon-xs icon-hoa-thi"></span>
									</label>
									<input type="date" name="NgaySinh" class="w253 input-has-tooltip" value="{!!$hoSo->NgaySinh!!}" />
									<div class=" clearfix "></div>
								</div>
								<div class="group-field ">
									<label class="label1 ">
										Giới tính
										<span class="icon icon-xs icon-hoa-thi "></span>
									</label>
									<div class="w253-inline ">
										<select name="GioiTinh " id=" " class="w253 input-has-tooltip form-control " style="background: white;padding:
									 5px 20px; ">
											<option value="nam" selected>Nam</option>
											<option value="nu">Nữ</option>
										</select>
									</div>
								</div>
								<div class="group-field ">
									<label class="label1 ">
										Chỗ ở hiện tại
										<span class="icon icon-xs icon-hoa-thi "></span>
									</label>
									<div class="w253-inline ">
										<div class="style-button w218 mb0 " style=" ">
											<input type="text " id="address " name="DiaChi" value="{!!$hoSo->DiaChi!!}" class="w253 input-has-tooltip" placeholder="Nhập địa chỉ">
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
									Tiêu đề hồ sơ
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<div class="style-button w260">
										<input type="text" id="title" name="TieuDe" class="w253 input-has-tooltip" placeholder="Ví dụ: Nhân viên kinh doanh" value="{!!$hoSo->TieuDe!!}">
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
									Số năm kinh nghiệm
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<input type="text" name="KinhNghiem" value="{!!$hoSo->KinhNghiem!!}" class="w253 input-has-tooltip" placeholder="Nhập kinh nghiệm"
									/>
								</div>
							</div>
							<div class="group-field">
								<label class="label1">
									Tình trạng hôn nhân
									<span class="icon icon-xs icon-hoa-thi"></span>
								</label>

								<input type="text" name="TinhTrangHonNhan" value="{!!$hoSo->TinhTrangHonNhan!!}" class="w253 input-has-tooltip" />
								<div class="clearfix"></div>
							</div>
							<div class="group-field">
								<label for="" class="label1">
									Lương mong muốn
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<input type="number" name="LuongKhoiDiem" class="w253 input-has-tooltip" value="{!!$hoSo->LuongKhoiDiem!!}" /> triệu
								</div>
							</div>
							<div class="group-field">
								<label for="" class="label1">
									Nguyện vọng làm việc
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<input type="text" name="NguyenVongLamViec" class="w253 input-has-tooltip" value="{!!$hoSo->NguyenVongLamViec!!}" placeholder="Nhập nguyện vọng làm việc"
									/>
								</div>
							</div>
							<div class="group-field">
								<label for="" class="label1">
									Trình độ cao nhất
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<div class="style-button w260">
										<div class="select2-container select-style no-style-button w260" id="s2id_level">
											<input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12">
											<div class="select2-drop select2-display-none level select2-with-searchbox">
												<div class="select2-search">
													<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input"> </div>
												<ul class="select2-results"> </ul>
											</div>
										</div>
										<select style="margin-top:-20px;" id="level" name="MaTrinhDo" class="select-style no-style-button w260 select2-offscreen"
										 tabindex="-1">
											<option selected="selected" value="">Chọn trình độ</option>
											@foreach($trinhDos as $item)
											<option value="{!!$item->id!!}">{!!$item->TenTrinhDo!!}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="group-field">
								<label for="" class="label1">
									Chứng chỉ
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<div class="style-button w260">
										<div class="select2-container select-style no-style-button w260" id="s2id_level">
											<input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12">
											<div class="select2-drop select2-display-none level select2-with-searchbox">
												<div class="select2-search">
													<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input"> </div>
												<ul class="select2-results"> </ul>
											</div>
										</div>
										<select style="margin-top:-20px;" id="level" name="MaCC" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
											<option selected="selected" value="">Chọn chứng chỉ</option>
											@foreach($chungChis as $item)
											<option value="{!!$item->id!!}">{!!$item->TenChungChi!!}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="group-field">
								<label for="" class="label1">
									Ngành
									<span class="icon-hoa-thi"></span>
								</label>
								<div class="group-right">
									<div class="style-button w260">
										<div class="select2-container select-style no-style-button w260" id="s2id_level">
											<input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen12">
											<div class="select2-drop select2-display-none level select2-with-searchbox">
												<div class="select2-search">
													<input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input"> </div>
												<ul class="select2-results"> </ul>
											</div>
										</div>
										<select style="margin-top:-20px;" id="level" name="MaNganh" class="select-style no-style-button w260 select2-offscreen" tabindex="-1">
											<option selected="selected" value="">Chọn ngành</option>
											@foreach($nganhs as $item)
											<option value="{!!$item->id!!}">{!!$item->TenNganh!!}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
				</div>
				<div class="group-field">
					<label class="label-form" for=""></label>
					<div class="group-right">
						<button name="submit_new" type="submit" class="btn btn-big btn-danger ml10 w140" id="submit_new" value="1">
							Lưu hồ sơ
						</button>
					</div>
				</div>
				</article>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>

		<div class="sidebar col-xs-4">
			<div class="inner-10">

				<style>
					.tool-ntd a .text {
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
							<!-- <li>
                <a href="#" title="Trang người tìm việc">
                    <span class="icon icon-sm icon-tu-hs"></span>
                    Trang người tìm việc
                </a>
            </li>
            <li class="has-child">
				<a href="tu-ho-so"><span class="icon icon-sm icon-tao-hs"></span>Tủ hồ sơ</a>
            </li>
            <li>
                <a href="tai-khoan"><span class="icon icon-sm icon-tai-khoan"></span>Tài khoản
                                    </a>
            </li>
            <li><a href="danh-sach-ho-so-lam-dep"><span class="icon icon-sm icon-edit-cv icon-cv-green30"></span>Làm đẹp hồ sơ <span style="color: red; font-style: italic;">(New)</span></a></li>
            <li><a href="viec-lam-da-luu"><span class="icon icon-sm icon-luu"></span>Việc làm đã lưu</a></li>
            <li><a href="viec-lam-da-ung-tuyen"><span class="icon icon-sm icon-da-ung-tuyen"></span>Việc làm đã ứng tuyển</a></li>
            <li><a href="nha-tuyen-dung-da-xem-ho-so"><span class="icon icon-sm icon-eye"></span>Nhà tuyển dụng đã xem hồ sơ</a></li>
            <li><a href="xem-thong-bao-viec-lam"><span class="icon icon-sm icon-tao-hs"></span>Thiết lập thông báo việc làm</a></li>
            <li style="position: relative">
                <a href="danh-sach-thong-bao-tu-he-thong">
                    <span class="icon icon-sm icon-notification_20"></span>
                    Ban quản trị thông báo
                                    </a>
            </li>
            <li><a href="huong-dan-thao-tac"><span class="icon document_guide_blue_20 document_guide_green_20 icon-sm"></span>Hướng dẫn thao tác</a></li> -->
							<li class="logout">
								<a href="dang-xuat">
									<span class="icon icon-sm icon-dang-xuat"></span>Đăng xuất</a>
							</li>
						</ul>
					</div>
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
	{{-- viec lam thich hop --}}
	{{-- <div class="container" style="margin-bottom:20px">
		<div class="inner-10">
			<div class="box-content">
				<header class="block-title">
					<h3 class="title font-roboto text-primary">
						<span class="text">Việc làm thích hợp với bạn</span>
						<span class="line"></span>
					</h3>
				</header>
				<article id="cv-trong-ngay" class="block-content">
					<div id="job-hot-field-content">
						<ul class="list-post-has-thumbnail no-style">
							<li class="col-xs-6 offset20">

								<a href="https://www.timviecnhanh.com/tuyen-ke-toan-kho-ha-noi-4138424.html" title="Kế Toán Kho" class="col-xs-2 no-padding text-center offset10">
									<span class="frame-th-list">
										<img src="https://cdn.timviecnhanh.com/asset/home/img/employer/5ae98130a9366_1525252400.png" alt="CÔNG TY TNHH ROYAL BLINDS VIỆT NAM">
									</span>
								</a>
								<div class="intro col-xs-4 offset20 push-left-10">
									<a href="https://www.timviecnhanh.com/tuyen-ke-toan-kho-ha-noi-4138424.html" title="Kế Toán Kho">
										<b class="">
											Kế Toán Kho </b>
									</a>
									<a href="https://www.timviecnhanh.com/cong-ty-tnhh-royal-blinds-viet-nam-tuyen-dung-2953896.html" title="CÔNG TY TNHH ROYAL BLINDS VIỆT NAM">
										<p class="meta">CÔNG TY TNHH ROYAL BLINDS VIỆT...</p>
									</a>
									<p>
										- Mức lương:
										<b>
											5-7 triệu </b>
										- Thời hạn:
										<b>31-05-2018</b>
									</p>
									<p>
										- Tỉnh/Thành phố:
										<b> Hà Nội</b>
									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<li class="col-xs-6 offset20 push-left-20">

								<a href="https://www.timviecnhanh.com/tuyen-nhan-vien-phat-trien-thi-truong-luong-10-trieu-thang-ho-chi-minh-4129805.html"
								 title="Nhân Viên Phát Triển Thị Trường Lương 10 Triệu / Tháng" class="col-xs-2 no-padding text-center offset10">
									<span class="frame-th-list">
										<img src="https://cdn.timviecnhanh.com/asset/home/img/employer/5aeabe1808acb_1525333528.png" alt="Công Ty TNHH Nhất Lộ Phát 168">
									</span>
								</a>
								<div class="intro col-xs-4 offset20 push-left-10">
									<a href="https://www.timviecnhanh.com/tuyen-nhan-vien-phat-trien-thi-truong-luong-10-trieu-thang-ho-chi-minh-4129805.html"
									 title="Nhân Viên Phát Triển Thị Trường Lương 10 Triệu / Tháng">
										<b class="">
											Nhân Viên Phát Triển Thị Trường Lương 10... </b>
									</a>


									<a href="https://www.timviecnhanh.com/cong-ty-tnhh-nhat-lo-phat-168-tuyen-dung-2952252.html" title="Công Ty TNHH Nhất Lộ Phát 168">
										<p class="meta">Công Ty TNHH Nhất Lộ Phát 168</p>
									</a>
									<p>
										- Mức lương:
										<b>
											7-10 triệu </b>
										- Thời hạn:
										<b>19-05-2018</b>
									</p>
									<p>

										- Tỉnh/Thành phố:
										<b> Hồ Chí Minh</b>

									</p>
								</div>
								<div class="clearfix"></div>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</article>
			</div>
		</div>
	</div> --}}
	</div>

	<div class="clearfix"></div>
	</div>
</section>
@endsection