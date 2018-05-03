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
        <div class="inner-10">


            <style type="text/css">
                .cmvl {
                    float: left;
                    padding-right: 5px;
                }
            </style>
            <div class="box-content">
                <header class="block-title">
                    <div class="title font-roboto text-primary">
                        <span class="text">
                            <h2 class="cmvl">Việc làm {!!$category->TenNganh!!} hấp dẫn</h2>
                        </span>
                        <span class="line"></span>
                    </div>
                </header>
                <article id="cv-trong-ngay" class="block-content">
                    <div id="job-hot-field-content">
                        <ul class="list-post-has-thumbnail no-style">
                            @foreach ($category->PhieuDangTuyen as $item)

                            <li class="col-xs-6 offset20" style="padding-bottom:30px;">

                                <a href="vendor/{!!$item->NhaTuyenDung->id!!}" title="" class="col-xs-2 no-padding text-center offset10">
                                    <span class="frame-th-list"><img src="imageNTD/{!!$item->NhaTuyenDung->HinhAnh!!}" alt=""></span>
                                </a>
                                <div class="intro col-xs-4 offset20 push-left-10">
                                    <a href="post/{!!$item->id!!}" title="Nhân Viên Văn Phòng - Phòng Kinh Doanh">
                                        <b class="">{!!$item->TieuDe!!}</b>
                                    </a>
                                    <a href="vendor/{!!$item->NhaTuyenDung->id!!}" title="">
                                        <p class="meta">vendor/{!!$item->NhaTuyenDung->TenNTD!!}</p>
                                    </a>

                                    <div class="block-manage-job-ntd pb12">
                                        <div class="w_50"><i class="icon-sprite-small icon-add"></i> {!!$item->NoiLamViec!!}
                                        </div>
                                        <div class="w_50" title="2 năm"><i class="icon-sprite-small icon-year"></i>{!!$item->YeuCauKinhNghiem!!}</div>
                                        <div class="w_50"><i class="icon-sprite-small icon-salary"></i>{!!$item->LuongKhoiDiem!!}</div>
                                        <div class="w_50"><i class="icon-sprite-small icon-time"></i>{!!$item->ThoiHanNopHoSo!!}</div>
                                        <div class="clearfix mb12"></div>
                                    </div>

                                    <span class="clearfix"></span>
                                </div>
                            </li>
                            @endforeach
                            <li class="col-xs-6 offset20 push-left-20" style="padding-bottom:30px;">
                            </li>


                            <!--span class="clearfix"></span-->
                        </ul>
                        <input type="hidden" id="job-hot-field-filter-area" value="1�������������������������������">
                    </div>
                    <span class="clearfix"></span>
                </article>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
@endsection