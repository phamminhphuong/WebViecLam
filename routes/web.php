<?php

// trang chu
Route::get('/','PageController@getTrangChu');
Route::get('dang-nhap','TaikhoanController@getDangnhap');
Route::post('dang-nhap','TaikhoanController@postDangnhap');
Route::get('dang-xuat','TaikhoanController@getDangxuat');

Route::get('dang-ky','PageController@getDangKy');
Route::get('dang-ky/nguoi-tim-viec','PageController@getDangKyNTV');
Route::post('dang-ky/nguoi-tim-viec','PageController@postDangKyNTV');
Route::get('dang-ky/nha-tuyen-dung','PageController@getDangKyNTD');
Route::post('dang-ky/nha-tuyen-dung','PageController@postDangKyNTD');


Route::get('tao-ho-so','PageController@getTaoHoSo');
Route::post('tao-ho-so','PageController@postTaoHoSo');
Route::get('dang-tin','PageController@getTaoPhieuDangTuyen');
Route::post('dang-tin','PageController@postTaoPhieuDangTuyen');
Route::get('tim-nhan-vien','PageController@getTimNhanVien');

Route::get('post/{id}', 'PageController@getPostDetail');
Route::get('vendor/{id}', 'PageController@getVendorDetail');
Route::get('category/{id}', 'PageController@getCategoryDetail');

Route::get('ky-nang-xin-viec', 'PageController@getSkills');
Route::get('ky-nang-xin-viec/{id}', 'PageController@getSkillDetail');

Route::get('tim-kiem', 'PageController@search');
Route::post('tim-kiem', 'PageController@search');


Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function() {
    // dashboard
    Route::group(['prefix' => 'bangdieukhien'], function() {
        Route::get('index','BangdieukhienController@getBangdieukhien');
    });
    // chuyen nganh
    Route::group(['prefix' => 'chuyennganh'], function() {
        Route::get('list','ChuyennganhController@getList');
        Route::get('add','ChuyennganhController@getAdd');
        Route::post('add','ChuyennganhController@postAdd');
        Route::get('edit/{id}','ChuyennganhController@getEdit');
        Route::post('edit/{id}','ChuyennganhController@postEdit');
        Route::get('delete/{id}','ChuyennganhController@getDelete');
        Route::get('detail/{id}','ChuyennganhController@getDetail');
    });
    // trinh do
    Route::group(['prefix' => 'trinhdo'], function() {
        Route::get('list','TrinhdoController@getList');
        Route::get('add','TrinhdoController@getAdd');
        Route::post('add','TrinhdoController@postAdd');
        Route::get('edit/{id}','TrinhdoController@getEdit');
        Route::post('edit/{id}','TrinhdoController@postEdit');
        Route::get('delete/{id}','TrinhdoController@getDelete');
        Route::get('detail/{id}','TrinhdoController@getDetail');
    });
    // chung chi
    Route::group(['prefix' => 'chungchi'], function() {
        Route::get('list','ChungchiController@getList');
        Route::get('add','ChungchiController@getAdd');
        Route::post('add','ChungchiController@postAdd');
        Route::get('edit/{id}','ChungchiController@getEdit');
        Route::post('edit/{id}','ChungchiController@postEdit');
        Route::get('delete/{id}','ChungchiController@getDelete');
        Route::get('detail/{id}','ChungchiController@getDetail');
    });
    // loai tai khoan
    Route::group(['prefix' => 'loaitaikhoan'], function() {
        Route::get('list','LoaitaikhoanController@getList');
        Route::get('add','LoaitaikhoanController@getAdd');
        Route::post('add','LoaitaikhoanController@postAdd');
        Route::get('edit/{id}','LoaitaikhoanController@getEdit');
        Route::post('edit/{id}','LoaitaikhoanController@postEdit');
        Route::get('delete/{id}','LoaitaikhoanController@getDelete');
        Route::get('detail/{id}','LoaitaikhoanController@getDetail');
    });
    
    // tai khoan
    Route::group(['prefix' => 'taikhoan'], function() {
        Route::get('list','TaikhoanController@getList');
        Route::get('add','TaikhoanController@getAdd');
        Route::post('add','TaikhoanController@postAdd');
        Route::get('edit/{id}','TaikhoanController@getEdit');
        Route::post('edit/{id}','TaikhoanController@postEdit');
        Route::get('delete/{id}','TaikhoanController@getDelete');
        Route::get('detail/{id}','TaikhoanController@getDetail');
    });
    
    // nha tuyen dung
    Route::group(['prefix' => 'nhatuyendung'], function() {
        Route::get('list','NhatuyendungController@getList');
        Route::get('add','NhatuyendungController@getAdd');
        Route::post('add','NhatuyendungController@postAdd');
        Route::get('edit/{id}','NhatuyendungController@getEdit');
        Route::post('edit/{id}','NhatuyendungController@postEdit');
        Route::get('delete/{id}','NhatuyendungController@getDelete');
        Route::get('detail/{id}','NhatuyendungController@getDetail');
    });
    // phieu dang tuyen
    Route::group(['prefix' => 'phieudangtuyen'], function() {
        Route::get('list','PhieudangtuyenController@getList');
        Route::get('add','PhieudangtuyenController@getAdd');
        Route::post('add','PhieudangtuyenController@postAdd');
        Route::get('edit/{id}','PhieudangtuyenController@getEdit');
        Route::post('edit/{id}','PhieudangtuyenController@postEdit');
        Route::get('delete/{id}','PhieudangtuyenController@getDelete');
        Route::get('detail/{id}','PhieudangtuyenController@getDetail');
    });
    // chi tiet phieu dang tuyen
    Route::group(['prefix' => 'chitietphieudangtuyen'], function() {
        Route::get('list','ChitietphieudangtuyenController@getList');
        Route::get('add','ChitietphieudangtuyenController@getAdd');
        Route::post('add','ChitietphieudangtuyenController@postAdd');
        Route::get('edit/{id}','ChitietphieudangtuyenController@getEdit');
        Route::post('edit/{id}','ChitietphieudangtuyenController@postEdit');
        Route::get('delete/{id}','ChitietphieudangtuyenController@getDelete');
        Route::get('detail/{id}','ChitietphieudangtuyenController@getDetail');
    });
    
    // ho so xin viec
    Route::group(['prefix' => 'hosoxinviec'], function() {
        Route::get('list','HosoxinviecController@getList');
        Route::get('add','HosoxinviecController@getAdd');
        Route::post('add','HosoxinviecController@postAdd');
        Route::get('edit/{id}','HosoxinviecController@getEdit');
        Route::post('edit/{id}','HosoxinviecController@postEdit');
        Route::get('delete/{id}','HosoxinviecController@getDelete');
        Route::get('detail/{id}','HosoxinviecController@getDetail');
    });
    
    // hop dong quang cao
    Route::group(['prefix' => 'hopdongquangcao'], function() {
        Route::get('list','HopdongquangcaoController@getList');
        Route::get('add','HopdongquangcaoController@getAdd');
        Route::post('add','HopdongquangcaoController@postAdd');
        Route::get('delete/{id}','HopdongquangcaoController@getDelete');
        Route::get('detail/{id}','HopdongquangcaoController@getDetail');
    });
    //  quang cao
    Route::group(['prefix' => 'quangcao'], function() {
        Route::get('list','QuangcaoController@getList');
        Route::get('add','QuangcaoController@getAdd');
        Route::post('add','QuangcaoController@postAdd');
        Route::get('edit/{id}','QuangcaoController@getEdit');
        Route::post('edit/{id}','QuangcaoController@postEdit');
        Route::get('delete/{id}','QuangcaoController@getDelete');
        Route::get('detail/{id}','QuangcaoController@getDetail');
    });
    // ky nang xin viec
    Route::group(['prefix' => 'kynangxinviec'], function() {
        Route::get('list','KynangxinviecController@getList');
        Route::get('add','KynangxinviecController@getAdd');
        Route::post('add','KynangxinviecController@postAdd');
        Route::get('edit/{id}','KynangxinviecController@getEdit');
        Route::post('edit/{id}','KynangxinviecController@postEdit');
        Route::get('delete/{id}','KynangxinviecController@getDelete');
        Route::get('detail/{id}','KynangxinviecController@getDetail');
    });
    
});