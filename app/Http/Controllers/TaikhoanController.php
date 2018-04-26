<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\LoaiTaiKhoan;

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
                    'password'=>'required|min:7|max:7',
                    'Resetpassword'=>'required|same:password'
                ],
                [
                    'email.required'=>'Bạn không được để trống tên đăng nhập',
                    'email.unique'=>'Bạn không được nhập trùng với email đã tồn tại ',
                    'email.min'=>'Bạn nhập ít nhất 3 ký tự',
                    'email.max'=>'Bạn phải nhập ít hơn 100 ký tự',
                    'password.required'=>'Bạn không được để trống mật khẩu',
                    'password.min'=>'Bạn nhập nhập đủ 7 ký tự',
                    'password.max'=>'Bạn phải nhập đủ 7 ký tự',

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

                    'password'=>'required|min:7|max:7',
                    'Resetpassword'=>'required|same:password'
                ],
                [
                    'password.required'=>'Bạn không được để trống mật khẩu',
                    'password.min'=>'Bạn nhập nhập đủ 7 ký tự',
                    'password.max'=>'Bạn phải nhập đủ 7 ký tự',

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

                return view('admin.taikhoan.detail',['taikhoan'=>$taikhoan]);
            }
            //  login
            public function getDangnhap(){
                return view('admin.dangnhap');
            }
            public function postDangnhap(Request $request){
                $this->validate($request,
                [
                    'email'=>'required',
                    'password'=>'required|min:7|max:7',
                   
                ],
                [
                    'email.required'=>'Bạn không được để trống tên đăng nhập',
                    'password.required'=>'Bạn không được để trống mật khẩu',
                    'password.min'=>'Bạn nhập nhập đủ 7 ký tự',
                    'password.max'=>'Bạn phải nhập đủ 7 ký tự',
                ]);
                $email=$request->email;
                $password=$request->password;
                if(Auth::attempt(['email' => $email, 'password' => $password])){
                    
                    return redirect('admin/bangdieukhien/index');
                }
                else{
                    return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
                }
            }
            public function getDangxuat(){
                Auth::logout();
                
                return redirect('admin/dangnhap');
                
            }
}
