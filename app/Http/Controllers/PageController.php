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

        $promotion1 = QuangCao::take(1)->get()[0];
        $promotion2 = QuangCao::skip(1)->take(1)->get()[0];


        return view('page.index',
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
                'bestSalaryPosts2' => $bestSalaryPosts2,
                'promotion1' => $promotion1,
                'promotion2' => $promotion2
            ]);
    }
    public function getDangKy(){
        return view('page.dang-ky');
    }
    
    public function getDangKyNTV(){
        return view('page.dang-ky-NTV');
    }
    
    public function getDangKyNTD(){
        return view('page.dang-ky-NTD');
    }

    public function getTaoHoSo(){
        return view('page.tao-ho-so');
    }

    public function getTaoPhieuDangTuyen(){
        return view('page.dang-tin-tuyen-dung');
    }
    
    public function getNhaTuyenDung(){
        return view('page.tim-nhan-vien');
    }
}
