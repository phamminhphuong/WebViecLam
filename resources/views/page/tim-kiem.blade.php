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
    <div class="primary">
        <div class="inner-10">
            <div class="box-content">
                <header class="block-title">
                    <h3 class="title font-roboto text-primary">
                        <span class="text">
                                Kết quả tìm kiếm
                                <span class="count">{!!$posts->count()!!}</span>
                        </span>
                        <span class="line"></span>
                        <div class="pull-right"></div>
                    </h3>
                </header>

                <article class="block-content outer-b-20">
                    <table class="table-content">
                        <thead class="text-primary">
                            <tr>
                                <th class="w55 text-left">Vị trí tuyển dụng</th>
                                <th class="text-center w15">Khu vực</th>
                                <th class="text-center w15">Mức lương</th>
                                <th class="text-center w15">Hạn nộp HS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td class="block-item w55">
                                    <a href="{!!$post->id!!}" class="item" title="">
                                        <span class="text">{!!$post->TieuDe!!}</span>
                                            </a>
                                    <a href="vendor/{!!$post->NhaTuyenDung->id!!}" title="Công ty Bất Động Sản VẠN AN">
                                        <p class="author">{!!$post->NhaTuyenDung->TenNTD!!}</p>
                                    </a>
                                </td>
                                <td class="text-center w15">
                                    <span>{!!$post->NoiLamViec!!}</span>
                                </td>
                                <td class="text-center w15">
                                    {!!$post->LuongKhoiDiem!!} triệu </td>
                                <td class="text-center w15">
                                    {!!$post->create_at!!} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </article>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
</div>
@endsection