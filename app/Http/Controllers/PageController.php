<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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

        $newPosts1 = PhieuDangTuyen::take(10)->get();
        $newPosts2 = PhieuDangTuyen::skip(10)->take(10)->get();
        $newPosts3 = PhieuDangTuyen::skip(20)->take(10)->get();


        $postsByCategory = DB::select("select cn.id, cn.TenNganh, count(pdt.id) as soLuong from chuyennganh cn 
        left join phieudangtuyen pdt on cn.id = pdt.MaNganh 
        group by cn.id, cn.TenNganh");

        $fastPosts = PhieuDangTuyen::take(10)->get();
        $fastestPosts = PhieuDangTuyen::take(10)->get();
        $postsForYou = PhieuDangTuyen::take(10)->get();

        $bestSalaryPosts1 = PhieuDangTuyen::take(10)->get();
        $bestSalaryPosts2 = PhieuDangTuyen::skip(10)->take(10)->get();

        $phieudangtuyen_hot=PhieuDangTuyen::Where('LuongKhoiDiem','>',5)->get();


        return view('page.trangchu',
            [
                'phieudangtuyen_hot'=>$phieudangtuyen_hot, 
                'newPosts1'=>$newPosts1,
                'newPosts2'=>$newPosts2,
                'newPosts3'=>$newPosts3,
                'postsByCategory'=>$postsByCategory,
                'fastPosts'=> $fastPosts,
                'fastestPosts'=> $fastestPosts,
                'postsForYou' => $postsForYou,
                'bestSalaryPosts1' => $bestSalaryPosts1,
                'bestSalaryPosts2' => $bestSalaryPosts2
            ]);
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
