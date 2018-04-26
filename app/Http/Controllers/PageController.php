<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaTuyenDung;
use App\ChungChi;
use App\TrinhDo;
use App\ChuyenNganh;
use App\QuangCao;
use App\HoSoXinViec;
use App\KyNangXinViec;
use App\PhieuDangTuyen;
class PageController extends Controller
{
    public function __construct(){
        $chuyennganh=ChuyenNganh::all();
        view()->share('chuyennganh', $chuyennganh);
        // if(Auth::check()){
            
        //     view()->share('nguoidung', Auth::user());
            
        // }
        
    }
    public function getTrangChu(){
        // $chuyennganh=ChuyenNganh::all();
    $phieudangtuyen_hot=PhieuDangTuyen::Where('LuongKhoiDiem','>',5)->get();
        return view('page.trangchu',['phieudangtuyen_hot'=>$phieudangtuyen_hot]);
        // echo $phieudangtuyen;

    }

    public function getLogin(){
        return view();
    }
}
