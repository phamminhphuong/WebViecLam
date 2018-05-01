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
    <!--  -->
    <div class="content-danhmuc row m0 mt12">
        <!-- Col left -->
        <div class="">
            <!-- Box News -->
            <div class="news">
                <h1 class="name-news">{!!$skill->TieuDe!!}</h1>
                <div class="details-news">
                    
                    <div id="attachment_9578" style="width: 610px" class="wp-caption aligncenter">
                        <a href="ky-nang-xin-viec/{!!$skill->id!!}"
                            target="_blank" rel="noopener noreferrer">
                            <img class="wp-image-9578 size-full" title="" src="image_KyNang/{!!$skill->HinhAnh!!}" alt="" width="600" height="354" srcset="" sizes="(max-width: 600px) 100vw, 600px"></a>
                        <p class="wp-caption-text"></p>
                    </div>
                </div>
                <div class="details-news">
                    {!!$skill->NoiDung!!}
                </div>
            </div>
            <!-- End Box News -->

        </div>
        <div class="box-search-job mt20 hidden-xs " id="xem-nhieu "></div>
        <div class="hidden-xs " id="hot-news-gra "></div>
    </div>
    <!-- End Col right  -->

</div>
<!-- End   -->

<div class="clearfix "></div>
<!-- Content box goc tuyen dung, goc tim viec, goc tu van -->
<div class="content-boxtintuc ">
    <div class="row row10 ">
    </div>

    <!-- End Content box goc tuyen dung, goc tim viec, goc tu van -->
</div>
</div>
@endsection