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
    //  dang nhap
    public function getDangNhap(){
        return view('page.dangnhap');
    }
    // chi tiet dang nhap nha tuyen dung
    public function getChiTietDangNhapNTD(){
        return view('page.chitietdangnhapNTD');
    }
    // chi tiet dang nhap nguoi tim viec
    public function getChiTietDangNhapNTV(){
        return view('page.chitietdangnhapNTV');
    }
    //  dang ky
    public function getDangKy(){
        return view('page.dangky');
    }
    
    //  dang ky nguoi tim viec
    public function getChiTietDangKyNTV(){
        return view('page.chitietdangkyNTV');
    }
    
    //  dang ky nha tuyen dung
    public function getChiTietDangKyNTD(){
        return view('page.chitietdangkyNTD');
    }

    //  tao ho so
    public function getTaoHoSo(){
        return view('page.taohoso');
    }
    //  tao phieu dang tuyen
    public function getTaoPhieuDangTuyen(){
        return view('page.dangtintuyendung');
    }
    //  nha tuyen dung
    public function getNhaTuyenDung(){
        return view('page.nhatuyendung');
    }


 

}
