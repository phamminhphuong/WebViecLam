@extends('admin.layout.index') 
@section('title')
    Danh sách kỹ năng xin việc
@endsection
@section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách kỹ năng xin việc</h3>
            <h3>
                <a href="admin/kynangxinviec/add">Tạo mới</a>
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
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                            Tài khoản
                        : activate to sort column descending" style="width: 99.7988px;">
                                        Mã kỹ năng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tiêu đề
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Nội dung
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Hình ảnh
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Nhà tuyển dụng
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Thời gian tạo
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Thời gian sửa
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Mật khẩu
: activate to sort column ascending" style="width: 239.799px;">
                                        Tùy chọn
                                    </th>
                            </thead>
                            <tbody>
                                @foreach($kynangxinviec as $kn)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {!!$kn->id!!}
                                    </td>
                                    <td>
                                        {!!$kn->TieuDe!!}
                                    </td>
                                    <td>
                                        {!!$kn->NoiDung!!}
                                    </td>
                                    <td>
                                        <img src="image_KyNang/{!!$kn->HinhAnh!!}" width="70px" height="70px" alt="">
                                    </td>
                                    <td>
                                        {!!$kn->nhatuyendung->TenNTD!!}
                                    </td>
                                    <td>
                                        {!!$kn->created_at!!}
                                    </td>
                                    <td>
                                        {!!$kn->updated_at!!}
                                    </td>
                                    <td>
                                        <a href="admin/kynangxinviec/edit/{!!$kn->id!!}">Sửa</a> |
                                        <a href="admin/kynangxinviec/detail/{!!$kn->id!!}">Chi tiết</a> |
                                        <a href="admin/kynangxinviec/delete/{!!$kn->id!!}">Xóa</a>
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