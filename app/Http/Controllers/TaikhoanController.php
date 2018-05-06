<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\LoaiTaiKhoan;
use App\HoSoXinViec;
use App\ChuyenNganh;
use App\TrinhDo;
use App\ChungChi;
class TaikhoanController extends Controller
{
             // danh sach
             public function getList(){
                $taikhoan=User::all();
                return view('admin.taikhoan.list',['taikhoan'=>$taikhoan]);
            }
            // tao moi
            public function getAdd(){
                $loaitaikhoan=LoaiTaiKhoan::all();
                return view('admin.taikhoan.add',['loaitaikhoan'=>$loaitaikhoan]);
            }
            public function postAdd(Request $request){
                $this->validate($request,
                [
                    'email'=>'required|unique:users|min:3|max:100',
                    'password'=>'required|min:6|max:8',
                    'Resetpassword'=>'required|same:password'
                ],
                [
                    'email.required'=>'Bạn không được để trống tên đăng nhập',
                    'email.unique'=>'Bạn không được nhập trùng với email đã tồn tại ',
                    'email.min'=>'Bạn nhập ít nhất 3 ký tự',
                    'email.max'=>'Bạn phải nhập ít hơn 100 ký tự',
                    'password.required'=>'Bạn không được để trống mật khẩu',
                    'password.min'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
                    'password.max'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
                    'Resetpassword.required'=>'Bạn không được để trống nhập lại mật khẩu',
                    'Resetpassword.same'=>'Bạn phải nhập giống mật khẩu'
                ]);
                $taikhoan=new User();
                $taikhoan->email=$request->email;
                $taikhoan->password=bcrypt($request->password);
                $taikhoan->MaLoaiTaiKhoan=$request->MaLoaiTaiKhoan;
                $taikhoan->save();
                return redirect('admin/taikhoan/list');
            }
            // sua
            public function getEdit($id){
                $taikhoan=User::find($id);
                $loaitaikhoan=LoaiTaiKhoan::all();
                return view('admin.taikhoan.edit',['taikhoan'=>$taikhoan,'loaitaikhoan'=>$loaitaikhoan]);
            }
            public function postEdit(Request $request, $id){
                $this->validate($request,
                [
                    'password'=>'required|min:6|max:8',
                    'Resetpassword'=>'required|same:password'
                ],
                [
                    'password.required'=>'Bạn không được để trống mật khẩu',
                    'password.min'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
                    'password.max'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
                    'Resetpassword.required'=>'Bạn không được để trống nhập lại mật khẩu',
                    'Resetpassword.same'=>'Bạn phải nhập giống mật khẩu'
                ]);
                $taikhoan=User::find($id);
                $taikhoan->password=bcrypt($request->password);
                $taikhoan->MaLoaiTaiKhoan=$request->MaLoaiTaiKhoan;
                $taikhoan->save();
                return redirect('admin/taikhoan/list');
            }
            // xoa
            public function getDelete($id){
                $taikhoan=User::find($id);
                $taikhoan->delete();
                return redirect('admin/taikhoan/list');
            }
            // detail
            public function getDetail($id){
                $taikhoan=User::find($id);

                return view('admin.taikhoan.detail', ['taikhoan'=>$taikhoan]);
            }
            //  login
            public function getDangnhap(){
                return view('admin.dangnhap');
            }
            public function postDangnhap(Request $request){
                $this->validate($request,
                [
                    'email'=>'required',
                    'password'=>'required',
                ],
                [
                    'email.required'=>'Bạn không được để trống tên đăng nhập',
                    'password.required'=>'Bạn không được để trống mật khẩu'
                ]);
                $email=$request->email;
                $password=$request->password;
                if(Auth::attempt(['email' => $email, 'password' => $password])){
                    
                    return redirect('admin/bangdieukhien/index');
                }
                else{
                    return redirect('dang-nhap')->with('thongbao','Đăng nhập không thành công');
                }
            }
            public function getDangxuat(){
                Auth::logout();
                return redirect('/');
            }
            
            public function getUpdateProfile() {
                $id = Auth::user()->id;
                $taikhoan=User::find($id);
                $hoso = HoSoXinViec::where('MaTaiKhoan', $id)->first();
                return view('admin.taikhoan.update-profile', ['hoso'=>$hoso]);
            }
            public function postUpdateProfile(Request $request) {
                $this->validate($request,
                [
                    'HoTen'=>'required|min:3|max:100',
                    'DiaChi'=>'required|min:3|max:200',
                    'DienThoai'=>'required|min:10|max:12',
                    'NgaySinh'=>'required',
                ],
                [
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
                // $hosoxinviec=new HoSoXinViec();
                $id = Auth::user()->id;

                $hoso = HoSoXinViec::where('MaTaiKhoan', $id)->first();
                if(empty($hoso)){
                    $hoso = new HoSoXinViec();
                }
                $chuyennganh=ChuyenNganh::first();
                $trinhdo=TrinhDo::first();
                $chungchi=ChungChi::first();

                $hoso->MaTaiKhoan=$id;
                $hoso->MaNganh =$chuyennganh->id;
                $hoso->MaTrinhDo=$trinhdo->id;
                $hoso->MaCC=$chungchi->id;
                $hoso->TieuDe='';
                $hoso->HoTen=$request->HoTen;
                $hoso->NgaySinh=$request->NgaySinh;
                $hoso->GioiTinh=$request->GioiTinh;
                $hoso->DiaChi=$request->DiaChi;
                $hoso->DienThoai=$request->DienThoai;
                $hoso->TinhTrangHonNhan='';
                $hoso->LuongKhoiDiem=0.0;
                $hoso->NoiLamViec='';
                $hoso->KinhNghiem='';
                $hoso->NguyenVongLamViec='';
                if($request->hasFile('HinhAnh')){
                    $file=$request->file('HinhAnh');
                    $name=$file->getClientOriginalName();
                    $HinhAnh=str_random(10)."_".$name;
                    $file->move('image_HoSo',$HinhAnh);
                    $hoso->HinhAnh=$HinhAnh;
                }
                else{
                    
                }

                $hoso->save();
                return view('admin.taikhoan.update-profile', ['messageSuccess' => 'Cập nhật thành công', 'hoso' => $hoso]);
            }
            public function postChangePassword(Request $request) {
                $this->validate($request,
                [
                    'password'=>'required|min:6|max:8',
                    'repassword'=>'required|same:password'
                ],
                [
                    'password.required'=>'Bạn không được để trống mật khẩu',
                    'password.min'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
                    'password.max'=>'Bạn nhập mật khẩu trong khoảng 6-8 ký tự',
                    'repassword.required'=>'Bạn không được để trống nhập lại mật khẩu',
                    'repassword.same'=>'Bạn phải nhập giống mật khẩu'
                ]);
                $id = Auth::user()->id;
                $taikhoan=User::find($id);
                $taikhoan->password=bcrypt($request->password);
                $taikhoan->save();
                $hoso = HoSoXinViec::where('MaTaiKhoan', $id)->first();
                if(empty($hoso)){
                    $hoso = new HoSoXinViec();
                }
                return view('admin.taikhoan.update-profile', ['messageSuccess' => 'Cập nhật thành công', 'hoso' => $hoso]);
            }
}
