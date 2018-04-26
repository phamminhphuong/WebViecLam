<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiTaiKhoan;
class LoaitaikhoanController extends Controller
{
          // danh sach
          public function getList(){
            $loaitaikhoan=LoaiTaiKhoan::all();
            return view('admin.loaitaikhoan.list',['loaitaikhoan'=>$loaitaikhoan]);
        }
        // tao moi
        public function getAdd(){
            return view('admin.loaitaikhoan.add');
        }
        public function postAdd(Request $request){
            $this->validate($request,
            [
                'TenLoaiTaiKhoan'=>'required|min:3|max:100',
        
            ],
            [
                'TenLoaiTaiKhoan.required'=>'Bạn không được để trống tên loại tài khoản',
                'TenLoaiTaiKhoan.min'=>'Bạn nhập ít nhất 3 ký tự',
                'TenLoaiTaiKhoan.max'=>'Bạn phải nhập ít hơn 100 ký tự',
               
            ]);
            $loaitaikhoan=new LoaiTaiKhoan();
            $loaitaikhoan->TenLoaiTaiKhoan=$request->TenLoaiTaiKhoan;
            $loaitaikhoan->save();
            return redirect('admin/loaitaikhoan/list');
        }
        // sua
        public function getEdit($id){
            $loaitaikhoan=LoaiTaiKhoan::find($id);
            return view('admin.loaitaikhoan.edit',['loaitaikhoan'=>$loaitaikhoan]);
        }
        public function postEdit(Request $request, $id){
            $this->validate($request,
            [
                'TenLoaiTaiKhoan'=>'required|min:3|max:100',
        
            ],
            [
                'TenLoaiTaiKhoan.required'=>'Bạn không được để trống tên loại tài khoản',
                'TenLoaiTaiKhoan.min'=>'Bạn nhập ít nhất 3 ký tự',
                'TenLoaiTaiKhoan.max'=>'Bạn phải nhập ít hơn 100 ký tự',
               
            ]);
            $loaitaikhoan=LoaiTaiKhoan::find($id);
            $loaitaikhoan->TenLoaiTaiKhoan=$request->TenLoaiTaiKhoan;
            $loaitaikhoan->save();
            return redirect('admin/loaitaikhoan/list');
        }
        // xoa
        public function getDelete($id){
            $loaitaikhoan=LoaiTaiKhoan::find($id);
            $loaitaikhoan->delete();
            return redirect('admin/loaitaikhoan/list');
        }
        // detail
        public function getDetail($id){
            $loaitaikhoan=LoaiTaiKhoan::find($id);
            return view('admin.loaitaikhoan.detail',['loaitaikhoan'=>$loaitaikhoan]);
        }
}
