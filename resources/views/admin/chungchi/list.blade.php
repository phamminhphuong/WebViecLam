@extends('admin.layout.index') @section('title') Danh sách chứng chỉ @endsection @section('content')
<section class="content container-fluid">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Danh sách chứng chỉ</h3>
            <h3>
                <a href="admin/chungchi/add">Tạo mới</a>
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
                                        Mã chứng chỉ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Tên chứng chỉ
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="
                            Mật khẩu
                        : activate to sort column ascending" style="width: 239.799px;">
                                        Nơi cấp
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
                                @foreach($chungchi as $cc)
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        {!!$cc->id!!}
                                    </td>
                                    <td>
                                        {!!$cc->TenChungChi!!}
                                    </td>
                                    <td>
                                        {!!$cc->NoiCap!!}
                                    </td>
                                    <td>
                                        {!!$cc->created_at!!}
                                    </td>
                                    <td>
                                        {!!$cc->updated_at!!}
                                    </td>
                                    <td>
                                        <a href="admin/chungchi/edit/{!!$cc->id!!}">Sửa</a> |
                                        <a href="admin/chungchi/detail/{!!$cc->id!!}">Chi tiết</a> |
                                        <a href="admin/chungchi/delete/{!!$cc->id!!}">Xóa</a>
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