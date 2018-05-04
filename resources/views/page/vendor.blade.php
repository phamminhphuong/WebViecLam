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
        <div class="primary no-padding">
            <div class="inner-10">
                <div class="detail-content box-content">
                    <article class="block-content">
                        <div class="block-info-company">
                            <header class="block-title">
                                <h1 class="title font-roboto text-primary">
                                    <span class="text">
                                        {!!$vendor->TenNTD!!}
                                    </span>
                                    <span class="line"></span>
                                </h1>
                            </header>

                            <div class="block-content">
                                <table class="no-border">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="no-border">
                                                <div class="col-xs-2 offset20 push-right no-padding">
                                                    <a href="vendor/{!!$vendor->id!!}" class="logo-company" title="Công Ty TNHH Thời Trang Nón Sơn - CN Hà Nội">
                                                    <img src="imageNTD/{!!$vendor->HinhAnh!!}" alt="">
                                                </a>
                                                </div>

                                                <div class="col-xs-8 offset20 push-left-20 summay-company">
                                                    <p><b>Địa chỉ:</b> {!!$vendor->DiaChi!!}</p>
                                                    <p><b>Website:</b> {!!$vendor->DiaChiWeb!!}</p>
                                                    <p><b>Giới thiệu:</b><br>

                                                    </p>
                                                    <div>
                                                        {!!$vendor->GioiThieu!!}
                                                    </div>
                                                    <br>
                                                    <div class="col-xs-5 offset10 text-left no-padding">
                                                        <div class="btn-box-share">
                                                            <div class="fb-like fb_iframe_widget" data-href="#"
                                                                data-layout="button" data-action="like" data-size="small" data-show-faces="false"
                                                                data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=357584370994953&amp;container_width=0&amp;href=https%3A%2F%2Fwww.timviecnhanh.com%2Fcong-ty-tnhh-thoi-trang-non-son-cn-ha-noi-tuyen-dung-2791711.html&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"><span style="vertical-align: bottom; width: 51px; height: 20px;"><iframe name="fbca9d02dec92c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=357584370994953&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F2VRzCA39w_9.js%3Fversion%3D42%23cb%3Df27f5989e7f8dd4%26domain%3Dwww.timviecnhanh.com%26origin%3Dhttps%253A%252F%252Fwww.timviecnhanh.com%252Ff1e17396a3bf20c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.timviecnhanh.com%2Fcong-ty-tnhh-thoi-trang-non-son-cn-ha-noi-tuyen-dung-2791711.html&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small" style="border: none; visibility: visible; width: 51px; height: 20px;" class=""></iframe></span></div>
                                                        </div>
                                                        <div class="btn-box-share">
                                                            <div class="fb-share-button fb_iframe_widget" data-href="#"
                                                                data-layout="button" data-size="small" data-mobile-iframe="true"
                                                                fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=357584370994953&amp;container_width=0&amp;href=https%3A%2F%2Fwww.timviecnhanh.com%2Fcong-ty-tnhh-thoi-trang-non-son-cn-ha-noi-tuyen-dung-2791711.html&amp;layout=button&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small"><span style="vertical-align: bottom; width: 59px; height: 20px;"><iframe name="f17415a999dad8c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:share_button Facebook Social Plugin" src="https://www.facebook.com/plugins/share_button.php?app_id=357584370994953&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F2VRzCA39w_9.js%3Fversion%3D42%23cb%3Df1581e2db1d3f44%26domain%3Dwww.timviecnhanh.com%26origin%3Dhttps%253A%252F%252Fwww.timviecnhanh.com%252Ff1e17396a3bf20c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.timviecnhanh.com%2Fcong-ty-tnhh-thoi-trang-non-son-cn-ha-noi-tuyen-dung-2791711.html&amp;layout=button&amp;locale=en_US&amp;mobile_iframe=true&amp;sdk=joey&amp;size=small" style="border: none; visibility: visible; width: 59px; height: 20px;" class=""></iframe></span></div>
                                                        </div>
                                                        <div class="btn-box-share">
                                                            <div class="btnZalo zalo-share-button zb-btn-blue-small" data-href="https://www.timviecnhanh.com/cong-ty-tnhh-thoi-trang-non-son-cn-ha-noi-tuyen-dung-2791711.html?utm_source=zalo&amp;utm_medium=zalomsg&amp;utm_campaign=zingdesktop"
                                                                data-oaid="1563179794022425731" data-layout="icon-text" data-customize="true"><span class="zb-logo-zalo"></span><span class="label">Chia sẻ</span></div>
                                                        </div>
                                                        <!--                                                <script src="https://sp.zalo.me/plugins/sdk.js" type="text/javascript" charset="utf-8"></script>-->
                                                    </div>
                                                </div>

                                                <div class="col-xs-2 offset20 push-left-20">
                                                </div>
                                                <div class="clearfix"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <table class="table-header-blue text-center style2">
                            <thead>
                                <tr>
                                    <th class="first">
                                        <h3>{!!$vendor->TenNTD!!}</h3>
                                        <p>Đã tìm thấy {!!$vendor->PhieuDangTuyen->count();!!} công việc</p>
                                    </th>
                                    <th>Khu vực</th>
                                    <th>Mức lương</th>
                                    <th class="last">Ngày hết hạn</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($vendor->PhieuDangTuyen as $item)
                                <tr>
                                    <td class="block-item text-left first">
                                        <a href="post/{!!$item->id!!}"
                                            class="item" title="">
                                                    <span class="text">{!!$item->TieuDe!!} </span>
                                        </a>
                                    </td>
                                    <td class="text-center w15">
                                        {!!$item->NoiLamViec!!}
                                    </td>
                                    <td class="text-center w15">
                                        {!!$item->LuongKhoiDiem!!} triệu</td>
                                    <td class="text-center w15 last">
                                        {!!$item->created_at!!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="no-hover">
                                    <td colspan="7" class="text-center">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </article>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection