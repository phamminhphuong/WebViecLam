<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HopDongQuangCao;
use App\NhaTuyenDung;
class HopdongquangcaoController extends Controller
{
          // danh sach
          public function getList(){
            $hopdongquangcao=HopDongQuangCao::all();
            return view('admin.hopdongquangcao.list',['hopdongquangcao'=>$hopdongquangcao]);
        }
        // tao moi
        public function getAdd(){
          $nhatuyendung=NhaTuyenDung::all();
            return view('admin.hopdongquangcao.add',['nhatuyendung'=>$nhatuyendung]);
        }
        public function postAdd(Request $request){
            $this->validate($request,
            [
                'NgayLap'=>'required',
                'NoiDungHopDong'=>'required|min:3|max:1000',
        
            ],
            [
                'NgayLap.required'=>'Bạn không được để trống ngày lập',
                'NoiDungHopDong.required'=>'Bạn không được để trống nột dung hợp đồng ',
                'NoiDungHopDong.min'=>'Bạn nhập ít nhất 3 ký tự',
                'NoiDungHopDong.max'=>'Bạn phải nhập ít hơn 1000 ký tự',
               
            ]);
            $hopdongquangcao=new HopDongQuangCao();
            $hopdongquangcao->MaNTD=$request->MaNTD;
            $hopdongquangcao->NgayLap=$request->NgayLap;
            $hopdongquangcao->NoiDungHopDong=$request->NoiDungHopDong;
            $hopdongquangcao->save();
            return redirect('admin/hopdongquangcao/list');
        }
        // sua
        public function getEdit($id){
            $nhatuyendung=NhaTuyenDung::find($id);
            $hopdongquangcao=HopDongQuangCao::find($id);
            return view('admin.hopdongquangcao.edit',['hopdongquangcao'=>$hopdongquangcao,'nhatuyendung'=>$nhatuyendung]);
        }
        public function postEdit(Request $request, $id){
          $this->validate($request,
          [
              'NgayLap'=>'required',
              'NoiDungHopDong'=>'required|min:3|max:1000',
      
          ],
          [
              'NgayLap.required'=>'Bạn không được để trống ngày lập',
              'NoiDungHopDong.required'=>'Bạn không được để trống nột dung hợp đồng ',
              'NoiDungHopDong.min'=>'Bạn nhập ít nhất 3 ký tự',
              'NoiDungHopDong.max'=>'Bạn phải nhập ít hơn 1000 ký tự',
             
          ]);
          $hopdongquangcao=new HopDongQuangCao();
          $hopdongquangcao->MaNTD=$request->MaNTD;
          $hopdongquangcao->NgayLap=$request->NgayLap;
          $hopdongquangcao->NoiDungHopDong=$request->NoiDungHopDong;
          $hopdongquangcao->save();
          return redirect('admin/hopdongquangcao/list');
        }
        // xoa
        public function getDelete($id){
            $hopdongquangcao=HopDongQuangCao::find($id);
            $hopdongquangcao->delete();
            return redirect('admin/hopdongquangcao/list');
        }
        // detail
        public function getDetail($id){
            $hopdongquangcao=HopDongQuangCao::find($id);
            return view('admin.hopdongquangcao.detail',['hopdongquangcao'=>$hopdongquangcao]);
        }
}
