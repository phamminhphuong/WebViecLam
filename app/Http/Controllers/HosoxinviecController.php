<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoSoXinViec;
use App\User;
use App\ChuyenNganh;
use App\TrinhDo;
use App\ChungChi;
class HosoxinviecController extends Controller
{
               // danh sach
               public function getList(){
                $hosoxinviec=HoSoXinViec::all();
                return view('admin.hosoxinviec.list',['hosoxinviec'=>$hosoxinviec]);
            }
            // tao moi
            public function getAdd(){
                $taikhoan=User::all();
                $chuyennganh=ChuyenNganh::all();
                $trinhdo=TrinhDo::all();
                $chungchi=ChungChi::all();
                return view('admin.hosoxinviec.add',['taikhoan'=>$taikhoan,'chuyennganh'=>$chuyennganh,'trinhdo'=>$trinhdo,'chungchi'=>$chungchi]);
            }
            public function postAdd(Request $request){   
                $this->validate($request,
                [
                    'TieuDe'=>'required|min:3|max:100',
                    'HoTen'=>'required|min:3|max:100',
                    'DiaChi'=>'required|min:3|max:200',
                    'DienThoai'=>'required|min:10|max:12',
                    'NgaySinh'=>'required',
                ],
                [
                    'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                    'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                    'TieuDe.max'=>'Bạn nhập tiêu đề không quá 100 ký tự',
                    'HoTen.required'=>'Bạn không được để trống họ tên',
                    'HoTen.min'=>'Bạn nhập họ tên ít nhất 3 ký tự',
                    'HoTen.max'=>'Bạn nhập họ tên không quá 100 ký tự',
                    'DiaChi.required'=>'Bạn không được để trống địa chỉ',
                    'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
                    'DiaChi.max'=>'Bạn nhập địa chỉ không quá 200 ký tự',
                    'DienThoai.required'=>'Bạn không được để trống điện thoại',
                    'DienThoai.min'=>'Bạn nhập điện thoại ít nhất 10 ký tự',
                    'DienThoai.max'=>'Bạn nhập điện thoại không quá 12 ký tự',
                    'NgaySinh.required'=>'Bạn không được để trống ngày sinh',
                ]);
                $hosoxinviec=new HoSoXinViec();
                $hosoxinviec->MaTaiKhoan=$request->MaTaiKhoan;
                $hosoxinviec->MaNganh =$request->MaNganh;
                $hosoxinviec->MaTrinhDo=$request->MaTrinhDo;
                $hosoxinviec->MaCC=$request->MaChungChi;
                $hosoxinviec->TieuDe=$request->TieuDe;
                $hosoxinviec->HoTen=$request->HoTen;
                $hosoxinviec->NgaySinh=$request->NgaySinh;
                $hosoxinviec->GioiTinh=$request->GioiTinh;
                $hosoxinviec->DiaChi=$request->DiaChi;
                $hosoxinviec->DienThoai=$request->DienThoai;
                $hosoxinviec->TinhTrangHonNhan=$request->TinhTrangHonNhan;
                $hosoxinviec->LuongKhoiDiem=$request->LuongKhoiDiem;
                $hosoxinviec->NoiLamViec=$request->NoiLamViec;
                $hosoxinviec->KinhNghiem=$request->KinhNghiem;
                $hosoxinviec->NguyenVongLamViec=$request->NguyenVongLamViec;
                if($request->hasFile('HinhAnh')){
                    $file=$request->file('HinhAnh');
                    $name=$file->getClientOriginalName();
                    $HinhAnh=str_random(10)."_".$name;
                    $file->move('image_HoSo',$HinhAnh);
                    $hosoxinviec->HinhAnh=$HinhAnh;
                }
                else{
                    $hosoxinviec->HinhAnh="";
                }

                $hosoxinviec->save();
                return redirect('admin/hosoxinviec/list');
            }
            // sua
            public function getEdit($id){
                $taikhoan=User::all();
                $chuyennganh=ChuyenNganh::all();
                $trinhdo=TrinhDo::all();
                $chungchi=ChungChi::all();
                $hosoxinviec=HoSoXinViec::find($id);
                return view('admin.hosoxinviec.edit',['hosoxinviec'=>$hosoxinviec,'taikhoan'=>$taikhoan,'chuyennganh'=>$chuyennganh,'trinhdo'=>$trinhdo,'chungchi'=>$chungchi]);
            }
            public function postEdit(Request $request, $id){
                $this->validate($request,
                [
                    'TieuDe'=>'required|min:3|max:100',
                    'HoTen'=>'required|min:3|max:100',
                    'DiaChi'=>'required|min:3|max:200',
                    'DienThoai'=>'required|min:10|max:12',
                    'NgaySinh'=>'required',
                ],
                [
                    'TieuDe.required'=>'Bạn không được để trống tiêu đề',
                    'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
                    'TieuDe.max'=>'Bạn nhập tiêu đề không quá 100 ký tự',
                    'HoTen.required'=>'Bạn không được để trống họ tên',
                    'HoTen.min'=>'Bạn nhập họ tên ít nhất 3 ký tự',
                    'HoTen.max'=>'Bạn nhập họ tên không quá 100 ký tự',
                    'DiaChi.required'=>'Bạn không được để trống địa chỉ',
                    'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
                    'DiaChi.max'=>'Bạn nhập địa chỉ không quá 200 ký tự',
                    'DienThoai.required'=>'Bạn không được để trống điện thoại',
                    'DienThoai.min'=>'Bạn nhập điện thoại ít nhất 10 ký tự',
                    'DienThoai.max'=>'Bạn nhập điện thoại không quá 12 ký tự',
                    'NgaySinh.required'=>'Bạn không được để trống ngày sinh',
                ]);
                $hosoxinviec=HoSoXinViec::find($id);
                $hosoxinviec->MaTaiKhoan=$request->MaTaiKhoan;
                $hosoxinviec->MaNganh =$request->MaNganh;
                $hosoxinviec->MaTrinhDo=$request->MaTrinhDo;
                $hosoxinviec->MaCC=$request->MaChungChi;
                $hosoxinviec->TieuDe=$request->TieuDe;
                $hosoxinviec->HoTen=$request->HoTen;
                $hosoxinviec->NgaySinh=$request->NgaySinh;
                $hosoxinviec->GioiTinh=$request->GioiTinh;
                $hosoxinviec->DiaChi=$request->DiaChi;
                $hosoxinviec->DienThoai=$request->DienThoai;
                $hosoxinviec->TinhTrangHonNhan=$request->TinhTrangHonNhan;
                $hosoxinviec->LuongKhoiDiem=$request->LuongKhoiDiem;
                $hosoxinviec->NoiLamViec=$request->NoiLamViec;
                $hosoxinviec->KinhNghiem=$request->KinhNghiem;
                $hosoxinviec->NguyenVongLamViec=$request->NguyenVongLamViec;
                if($request->hasFile('HinhAnh')){
                    $file=$request->file('HinhAnh');
                    $name=$file->getClientOriginalName();
                    $HinhAnh=str_random(10)."_".$name;
                    $file->move('image_HoSo',$HinhAnh);
                    $hosoxinviec->HinhAnh=$HinhAnh;
                }
                else{
                   
                }

                $hosoxinviec->save();
                return redirect('admin/hosoxinviec/list');
            }
            // xoa
            public function getDelete($id){
                $hosoxinviec=HoSoXinViec::find($id);
                $hosoxinviec->delete();
                return redirect('admin/hosoxinviec/list');
            }
            // detail
            public function getDetail($id){
                $hosoxinviec=HoSoXinViec::find($id);
                return view('admin.hosoxinviec.detail',['hosoxinviec'=>$hosoxinviec]);
            }
}
