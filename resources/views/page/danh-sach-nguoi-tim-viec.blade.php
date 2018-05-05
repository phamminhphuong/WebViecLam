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
                        <h2 class="cmvl">Danh sách người tìm việc</h2>
                    </span>
                    <span class="line"></span>
                </div>
            </header>
            <article id="cv-trong-ngay" class="block-content">
                <div id="job-hot-field-content">
                    <ul class="list-post-has-thumbnail no-style">
                        @foreach ($hosoes as $hoSo)

                        <li class="col-xs-6 offset20" style="padding-bottom:30px;">
                            <a href="profile/{!!$hoSo->id!!}" title="" class="col-xs-2 no-padding text-center offset10">
                                <span class="frame-th-list"><img src="image_HoSo/{!!$hoSo->HinhAnh!!}" alt=""></span>
                            </a>
                            <div class="intro col-xs-4 offset20 push-left-10">
                                <a href="profile/{!!$hoSo->id!!}" title="">
                                    <b class="">{!!$hoSo->HoTen!!}</b>
                                </a>
                                <a href="profile/{!!$hoSo->id!!}" title="">
                                    {{--  <p class="meta">{!!$ntd->TenNTD!!}</p>  --}}
                                </a>

                                <div class="block-manage-job-ntd pb12">
                                    <div class="w_50" style="margin-left:-20px;"><i class="icon-sprite-small icon-add"></i>ĐC: {!!$hoSo->DiaChi!!}
                                    </div>
                                    <div class="w_50" title="2 năm" style="margin-left:-10px;"><i class="icon-sprite-small icon-year"></i> SĐT: {!!$hoSo->DienThoai!!}</div>
                                    <div class="clearfix mb15"></div>
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
@endsection