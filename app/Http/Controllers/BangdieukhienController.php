<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChungChi;
use App\ChuyenNganh;
use App\NhaTuyenDung;
use App\PhieuDangTuyen;
use App\TrinhDo;
use App\User;
use App\LoaiTaiKhoan;
class BangdieukhienController extends Controller
{
    public function getBangdieukhien(){
        $NumberChungChi=count(ChungChi::all());
        $NumberTrinhDo=count(TrinhDo::all());
        $NumberChuyenNganh=count(ChuyenNganh::all());
        $NumberPhieuDangTuyen=count(PhieuDangTuyen::all());
        $NumberLoaiTaiKhoan=count(LoaiTaiKhoan::all());
        $NumberUser=count(User::all());
        $NumberNhaTuyenDung=count(NhaTuyenDung::all());
        return view('admin.bangdieukhien.index',['NumberChungChi'=>$NumberChungChi,
        'NumberTrinhDo'=>$NumberTrinhDo,'NumberChuyenNganh'=>$NumberChuyenNganh,
        'NumberPhieuDangTuyen'=>$NumberPhieuDangTuyen,'NumberUser'=>$NumberUser,'NumberNhaTuyenDung'=>$NumberNhaTuyenDung,'NumberLoaiTaiKhoan'=>$NumberLoaiTaiKhoan]);

    }
}
