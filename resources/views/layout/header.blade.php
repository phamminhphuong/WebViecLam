 <header class="header-site" id="header">
        <div class="container menu-header-first">
            <div class="col-xs-12">
                <ul class="menu-header">
                    <li>
                        <a href="tel:02473098888" class="hotline" title="Hotline">
                            <i class="icon icon-call icon-xs"></i>
                            Hotline:
                            <b>(024) 7309 8888</b>
                        </a>
                    </li>
                    <li>
                        <a href="/" title="Tim viec lam nhanh, tìm kiếm việc làm, tuyển dụng lương cao">
                            <i class="icon-sprite-hs icon-head-home"></i>
                            Trang chủ
                        </a>
                    </li>
                    <li class="active">
                        <a rel="nofollow" href="index.html" title="Tim viec lam nhanh, tìm kiếm việc làm, tuyển dụng lương cao">
                            <i class="icon-sprite-hs icon-head-ntv"></i>
                            Người tìm việc
                        </a>
                    </li>
                    <li>
                        <a rel="nofollow" href="nhatuyendung.html" title="Trang nhà tuyển dụng">
                                <i class="icon-sprite-hs icon-head-ntv"></i>
                            Nhà tuyển dụng
                        </a>
                    </li>
                    <li>
                        <a href="goc-nghe-nghiep/indexc990.html?utm_source=timviecnhanh.com&amp;utm_medium=referral&amp;utm_campaign=site-timviecnhanh.com&amp;utm_content=menu-header"
                            title="Góc nghề nghiệp">
                            <i class=" icon-goc-nghe-nghiep "></i>
                            Góc nghề nghiệp
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <ul class="action-header">
                    <li>
                        <div class="logo">
                            <h1>
                                <a href="/" title="Tim viec lam nhanh, tìm kiếm việc làm, tuyển dụng lương cao">
                                    <img src="image/l.png" style="height:38px;" alt="Tim viec nhanh" title="Tim viec nhanh tuyển dụng việc làm 24h lương cao">
                                </a>
                            </h1>
                        </div>
                    </li>
                    <li>
                        <form id="job_advance_search" role="form" action="#" method="GET" class="form-inline form-search-top"
                            enctype="multipart/form-data">
                            <input type="text" id="key-s" name="tu_khoa" value="" class="form-control col-xs-" placeholder="Nhập tên công việc, vị trí...">
                            <div class="style-flat">
                                <select name="nganh_nghe[]" class="select-style">
                                    <option value="">Chọn ngành nghề</option>
                                    @foreach($categories as $cn)
                                        <option value="{!!$cn->id!!}">{!!$cn->TenNganh!!}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button id="base_search" type="submit" class="btn submit btn-danger col-xs-">
                                <i class="icon icon-xs icon-search"></i>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="menu-header-nth" id="menu-header-nth">
                <div class="container relative">
                    <div class="col-xs-12">
                        <ul class="list-menu-nth">
                             @foreach($menu as $cn)
                                <li>
                                    <a href="category/{!!$cn->id!!}" title="Kinh doanh">
                                        {!!$cn->TenNganh!!}
                                       <i class="fas fa-angle-right icon-arr-head"></i>
                                    </a> 
                                </li>
                              @endforeach
                            <li>
                                <a href="viec-lam/danh-sach-nganh.html">
                                    <i class="icon-sprite-hs icon-arr-go-head"></i>
                                    Xem ngành khác
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </header>