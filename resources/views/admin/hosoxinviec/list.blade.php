@extends('admin.layout.index') 
@section('title')
    Danh sách hồ sơ xin việc
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách hồ sơ xin việc</h3>
            <h3>
                <a href="admin/hosoxinviec/add">Tạo mới</a>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="example1_length">
                            <label>Hiển thị
                                <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> bản ghi</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div id="example1_filter" class="dataTables_filter">
                            <label>Tìm kiếm:
                                <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    {{--  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tài khoản
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Chuyên ngành
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Trình độ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Chứng chỉ
                                    </th>  --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Tiêu đề
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Họ tên
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Ngày sinh
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Giói tính
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Địa chỉ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                       Điện thoại
                                    </th>
                                   
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tình trạng hôn nhân
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Lương khởi điểm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Nơi làm việc
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Kinh nghiệm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Nguyện vọng làm việc
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hình ảnh
                                    {{--  </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Creaet_at
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Update_at
                                    </th>  --}}
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
: activate to sort column ascending" style="width: 239.799px;">
                                        Tùy chọn
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($hosoxinviec as $hs)
                                <tr role="row" class="odd">
                                    {{--  <td class="sorting_1">
                                        {!!$hs->MaTaiKhoan!!}
                                    </td>
                                    <td>
                                        {!!$hs->chuyennganh->TenNganh!!}
                                    </td>
                                    <td>
                                        {!!$hs->trinhdo->TenTrinhDo!!}
                                    </td>
                                    <td>
                                        {!!$hs->chungchi->TenChungChi!!}
                                    </td>  --}}
                                    <td>
                                        {!!$hs->TieuDe!!}
                                    </td>
                                    <td>
                                        {!!$hs->HoTen!!}
                                    </td>
                                    <td>
                                        {!!$hs->NgaySinh!!}
                                    </td>
                                    <td>
                                        @if($hs->GioiTinh==1)
                                            {!!"Nam"!!}
                                        @else
                                            {!!"Nữ"!!}
                                        @endif
                                    </td>
                                    <td>
                                        {!!$hs->DiaChi!!}
                                    </td>
                                    <td>
                                        {!!$hs->DienThoai!!}
                                    </td>
                                   
                                    </td>
                                    <td>
                                        {!!$hs->TinhTrangHonNhan!!}
                                    </td>
                                    <td>
                                        {!!$hs->LuongKhoiDiem!!}
                                    </td>
                                    <td>
                                        {!!$hs->NoiLamViec!!}
                                    </td>
                                    <td>
                                        {!!$hs->KinhNghiem!!}
                                    </td>
                                    <td>
                                        {!!$hs->NguyenVongLamViec!!}
                                    </td>
                                     <td>
                                        <img src="image_HoSo/{!!$hs->HinhAnh!!}" width="50px" height="50px" alt="">
                                    </td>
                                    {{--  <td>
                                        {!!$hs->created_at!!}
                                    </td>
                                    <td>
                                        {!!$hs->updated_at!!}
                                    </td>  --}}
                                    <td>
                                        <a href="admin/hosoxinviec/edit/{!!$hs->id!!}">Sửa</a> |
                                        <a href="admin/hosoxinviec/detail/{!!$hs->id!!}">Chi tiết</a> |
                                        <a href="admin/hosoxinviec/delete/{!!$hs->id!!}">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Hiển thị 1 - 7 của 7 bản ghi</div>
                    </div>
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example1_previous">
                                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Trước</a>
                                </li>
                                <li class="paginate_button active">
                                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                                </li>
                                <li class="paginate_button next disabled" id="example1_next">
                                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">Sau</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection