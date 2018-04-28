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
use App\User;
use App\LoaiTaiKhoan;
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
    public function postDangKyNTV(){
        return view('page.dang-ky-NTV');
    }
    
    public function getDangKyNTD(){
        return view('page.dang-ky-NTD');
    }

    public function postDangKyNTD(Request $request){

        $this->validate($request,
            [
                'email'=>'required|unique:users|min:3|max:100',
                'password'=>'required',
                'confirm_password'=>'required|same:password',
                'TenNTD'=>'required|min:3|max:100',
                'DiaChi'=>'required|min:3|max:500',
                'GioiThieu'=>'required|min:3',
                'DiaChiWeb'=>'required|min:3|max:100'
            ],
            [
                'email.required'=>'Bạn không được để trống tên đăng nhập',
                'email.unique'=>'Bạn không được nhập trùng với email đã tồn tại ',
                'email.min'=>'Bạn nhập ít nhất 3 ký tự',
                'email.max'=>'Bạn phải nhập ít hơn 100 ký tự',
                'password.required'=>'Bạn không được để trống mật khẩu',
                'confirm_password.required'=>'Bạn không được để trống nhập lại mật khẩu',
                'confirm_password.same'=>'Bạn phải nhập giống mật khẩu',
                'TenNTD.required'=>'Bạn không được để trống tên nhà tuyển dụng',
                'TenNTD.min'=>'Bạn nhập tên nhà dụng ít nhất 3 ký tự',
                'TenNTD.max'=>'Bạn phải nhập tên nhà tuyển dụng ít hơn 100 ký tự',
                'DiaChi.required'=>'Bạn không được để trống địa chỉ',
                'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
                'DiaChi.max'=>'Bạn phải nhập địa chỉ ít hơn 500 ký tự',
                'GioiThieu.required'=>'Bạn không được để trống giới thiệu',
                'GioiThieu.min'=>'Bạn nhập giới thiệu web ít nhất 3 ký tự',
                'DiaChiWeb.required'=>'Bạn không được để trống địa chỉ web',
                'DiaChiWeb.min'=>'Bạn nhập địa chỉ web ít nhất 3 ký tự',
                'DiaChiWeb.max'=>'Bạn phải nhập địa chỉ web ít hơn 100 ký tự',
            ]);

            DB::beginTransaction();
            try {
                $loaitaikhoan=LoaiTaiKhoan::where('TenLoaiTaiKhoan', 'Nhà tuyển dụng')->first();

                $user = new User();
                $user->email=$request->email;
                $user->password=bcrypt($request->password);
                $user->MaLoaiTaiKhoan=$loaitaikhoan->id;
                $user->save();

                $nhatuyendung = new NhaTuyenDung();
                $nhatuyendung->TenNTD=$request->TenNTD;
                $nhatuyendung->DiaChi=$request->DiaChi;
                $nhatuyendung->DienThoai=$request->DienThoai;
                $nhatuyendung->GioiThieu=$request->GioiThieu;
                $nhatuyendung->MaTaiKhoan = $user->id;
                $nhatuyendung->DiaChiWeb = $request->DiaChiWeb;
                $nhatuyendung->HinhAnh = '';
                if($request->hasFile('HinhAnh')){
                    $file=$request->file('HinhAnh');
                    $name=$file->getClientOriginalName();
                    $HinhAnh=str_random(10)."_".$name;
                    $file->move('imageNTD',$HinhAnh);
                    $nhatuyendung->HinhAnh=$HinhAnh;
                }
                else{
                    $nhatuyendung->HinhAnh="";
                }
              
                $nhatuyendung->save();

                DB::commit();
            }
            catch (Exception $e) {
                DB::rollBack();
                $validator->addMessage("Có lỗi xảy ra!!! Vui lòng kiểm tra lại");
            }
        $messageSuccess = "Xin chúc mừng. Bạn đã đăng ký thành công tài khoản. Vui lòng đăng nhập để sử dụng dịch vụ của chúng tôi";
        return view('page.dang-ky-NTD', ['messageSuccess' => $messageSuccess]);
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
