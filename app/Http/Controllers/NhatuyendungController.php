<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhaTuyenDung;
use App\User;
class NhatuyendungController extends Controller
{
               // danh sach
        public function getList(){
            $nhatuyendung=NhaTuyenDung::all();
            $user=User::all();
            return view('admin.nhatuyendung.list',['nhatuyendung'=>$nhatuyendung,'user'=>$user]);
        }
        // tao moi
        public function getAdd(){
            $user=User::all();
            return view('admin.nhatuyendung.add',['user'=>$user]);
        }
        public function postAdd(Request $request){   
            $this->validate($request,
            [
                'TenNTD'=>'required|min:3|max:100',
                'DiaChi'=>'required|min:3|max:500',
                'DiaChiWeb'=>'required|min:3|max:100',
                'GioiThieu'=>'required|min:3|',
            ],
            [
                'TenNTD.required'=>'Bạn không được để trống tên nhà tuyển dụng',
                'TenNTD.min'=>'Bạn nhập tên nhà dụng ít nhất 3 ký tự',
                'TenNTD.max'=>'Bạn phải nhập tên nhà tuyển dụng ít hơn 100 ký tự',
                'DiaChi.required'=>'Bạn không được để trống địa chỉ',
                'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
                'DiaChi.max'=>'Bạn phải nhập địa chỉ ít hơn 500 ký tự',
                'DiaChiWeb.required'=>'Bạn không được để trống địa chỉ web',
                'DiaChiWeb.min'=>'Bạn nhập địa chỉ web ít nhất 3 ký tự',
                'DiaChiWeb.max'=>'Bạn phải nhập địa chỉ web ít hơn 100 ký tự',
                'GioiThieu.required'=>'Bạn không được để trống giới thiệu',
                'GioiThieu.min'=>'Bạn nhập giới thiệu web ít nhất 3 ký tự',
            ]);
            $nhatuyendung=new NhaTuyenDung();
            $nhatuyendung->TenNTD=$request->TenNTD;
            $nhatuyendung->DiaChi=$request->DiaChi;
            $nhatuyendung->DienThoai=$request->DienThoai;
            $nhatuyendung->DiaChiWeb=$request->DiaChiWeb;
            $nhatuyendung->GioiThieu=$request->GioiThieu;
            $nhatuyendung->MaTaiKhoan=$request->MaTaiKhoan;
            if($request->hasFile('HinhAnh'))
            {
                $file=$request->file('HinhAnh');
                $name=$file->getClientOriginalName();
                $HinhAnh=str_random(6)."_".$name;
                $file->move('imageNTD',$HinhAnh);
                $nhatuyendung->HinhAnh=$HinhAnh;
            }
            else{
                $nhatuyendung->HinhAnh='';
            }
            $nhatuyendung->save();
            return redirect('admin/nhatuyendung/list');
        }
        // sua
        public function getEdit($id){
            $user=User::all();
            $nhatuyendung=NhaTuyenDung::find($id);
            return view('admin.nhatuyendung.edit',['user'=>$user,'nhatuyendung'=>$nhatuyendung]);
        }
        public function postEdit(Request $request, $id){
            $this->validate($request,
            [
                'TenNTD'=>'required|min:3|max:100',
                'DiaChi'=>'required|min:3|max:500',
                'DiaChiWeb'=>'required|min:3|max:100',
                'GioiThieu'=>'required|min:3|',
            ],
            [
                'TenNTD.required'=>'Bạn không được để trống tên nhà tuyển dụng',
                'TenNTD.min'=>'Bạn nhập tên nhà dụng ít nhất 3 ký tự',
                'TenNTD.max'=>'Bạn phải nhập tên nhà tuyển dụng ít hơn 100 ký tự',
                'DiaChi.required'=>'Bạn không được để trống địa chỉ',
                'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
                'DiaChiWeb.required'=>'Bạn không được để trống địa chỉ web',
                'DiaChiWeb.min'=>'Bạn nhập địa chỉ web ít nhất 3 ký tự',
                'DiaChiWeb.max'=>'Bạn phải nhập địa chỉ web ít hơn 100 ký tự',
                'GioiThieu.required'=>'Bạn không được để trống giới thiệu',
                'GioiThieu.min'=>'Bạn nhập giới thiệu web ít nhất 3 ký tự',
            ]);
            $nhatuyendung=NhaTuyenDung::find($id);
            $nhatuyendung->TenNTD=$request->TenNTD;
            $nhatuyendung->DiaChi=$request->DiaChi;
            $nhatuyendung->DienThoai=$request->DienThoai;
            $nhatuyendung->DiaChiWeb=$request->DiaChiWeb;
            $nhatuyendung->GioiThieu=$request->GioiThieu;
            $nhatuyendung->MaTaiKhoan=$request->MaTaiKhoan;
            if($request->hasFile('HinhAnh')){
                $file=$request->file('HinhAnh');
                $name=$file->getClientOriginalName();
                $HinhAnh=str_random(10)."_".$name;
                $file->move('imageNTD',$HinhAnh);
                $nhatuyendung->HinhAnh=$HinhAnh;
            }
            else{
               
            }
            $nhatuyendung->save();
            return redirect('admin/nhatuyendung/list');
         
        }
        // xoa
        public function getDelete($id){
            $nhatuyendung=NhaTuyenDung::find($id);
            $nhatuyendung->delete();
            return redirect('admin/nhatuyendung/list');
        }
        // detail
        public function getDetail($id){
            $nhatuyendung=NhaTuyenDung::find($id);
            return view('admin.nhatuyendung.detail',['nhatuyendung'=>$nhatuyendung]);
        }
}