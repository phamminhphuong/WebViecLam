@extends('admin.layout.index') 
@section('title')
    Danh sách phiếu đăng tuyển
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách phiếu đăng tuyển</h3>
            <h3>
                <a href="admin/phieudangtuyen/add">Tạo mới</a>
            </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
               
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr role="row">
                                    {{--  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending">
                                        Mã phiếu đăng tuyển
                                    </th>  --}}
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending">
                                        Mã nhà tuyển dụng
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending">
                                        Mã ngành
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending">
                                        Mã trình độ
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending">
                                        Mã chứng chỉ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Tiêu đề
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Vị trí tuyển dụng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width:150px">
                                        Mô tả công việc
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Thời hạn nộp hồ sơ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Số lượng tuyển dụng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Nơi làm việc
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width:50px">
                                        Yêu cầu kinh nghiệm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Lương khởi điểm
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                        Hot
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending">
                                    Thời gian tạo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
                        : activate to sort column ascending">
                                    Thời gian sửa
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
: activate to sort column ascending">
                                    Tùy chọn
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($phieudangtuyen as $pdt)
                                <tr role="row" class="odd">
                                    {{--  <td class="sorting_1">
                                        {!!$pdt->id!!}
                                    </td>  --}}
                                    <td>
                                        {!!$pdt->nhatuyendung->TenNTD!!}
                                    </td>
                                    <td>
                                        {!!$pdt->chuyennganh->TenNganh!!}
                                    </td>
                                    <td>
                                        {!!$pdt->trinhdo->TenTrinhDo!!}
                                    </td>
                                    <td>
                                        {!!$pdt->chungchi->TenChungChi!!}
                                    </td>
                                    <td>
                                        {!!$pdt->TieuDe!!}
                                    </td>
                                    <td>
                                        {!!$pdt->ViTriTuyenDung!!}
                                    </td>
                                    <td>
                                        {!!$pdt->MoTaCV!!}
                                    </td>
                                    <td>
                                        {!!$pdt->ThoiHanNopHoSo!!}
                                    </td>
                                    <td>
                                        {!!$pdt->SoLuongTuyenDung!!}
                                    </td>
                                    <td>
                                        {!!$pdt->NoiLamViec!!}
                                    </td>
                                    <td>
                                        {!!$pdt->YeuCauKinhNghiem!!}
                                    </td>
                                    <td>
                                        {!!$pdt->LuongKhoiDiem!!}
                                    </td>
                                    <td>
                                        {!!$pdt->Hot!!}
                                    </td>
                                    <td>
                                        {!!$pdt->created_at!!}
                                    </td>
                                    <td>
                                        {!!$pdt->updated_at!!}
                                    </td>
                                    <td>
                                        <a href="admin/phieudangtuyen/edit/{!!$pdt->id!!}">Sửa</a> |
                                        <a href="admin/phieudangtuyen/detail/{!!$pdt->id!!}">Chi tiết</a> |
                                        <a href="admin/phieudangtuyen/delete/{!!$pdt->id!!}">Xóa</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
@endsection