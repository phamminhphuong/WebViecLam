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
<div class="main-content main-01 main-blue">
    <div class="container">
        <div class="content-danhmuc row m0">

            <!-- Col left -->
            <div class="contentdm-left">
                <div class="goctuyendung">
                    <div id="ajax-posts">

                        <div class="list-contnet-gtd 9577">
                            @foreach($skills as $item)
                            <div class="item-gtd">
                                <a class="" href="ky-nang-xin-viec/{!!$item->id!!}" title="">
                                        <img src="image_KyNang/{!!$item->HinhAnh!!}" title=""></a>
                                <div class="mota-gtd">
                                    <a class="title-item-gtd title-gtd dis-inline" href="ky-nang-xin-viec" rel="category tag">Góc tuyển dụng</a>
                                    <h3 class="h3_none">
                                    <a href="ky-nang-xin-viec/{!!$item->id!!}" class="title-dm">
                                        {!!$item->TieuDe!!}
                                    </a></h3>
                                </div>
                            </div>
                            <!-- End item-gtd -->
                            <hr class="inline"> @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Col right  -->
        </div>
        <!-- End   -->

        <div class="clearfix"></div>
        <!-- Content box goc tuyen dung, goc tim viec, goc tu van -->

        <div class="content-boxtintuc">
            <div class="row row10">
            </div>

            <!-- End Content box goc tuyen dung, goc tim viec, goc tu van -->
        </div>
    </div>
    <!-- End Body -->
    <!-- Footer -->
</div>
@endsection