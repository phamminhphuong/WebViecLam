<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $categories = ChuyenNganh::all();
        $menu = ChuyenNganh::take(6)->get();
        $postsCount = PhieuDangTuyen::all()->count();
        view()->share(['categories' => $categories, 'menu' => $menu, 'postsCount' => $postsCount]);
        
    }
    public function getTrangChu(){

        $newPosts1 = PhieuDangTuyen::orderBy('created_at', 'desc')->take(10)->get();
        $newPosts2 = PhieuDangTuyen::orderBy('created_at', 'desc')->skip(10)->take(10)->get();
        $newPosts3 = PhieuDangTuyen::orderBy('created_at', 'desc')->skip(20)->take(10)->get();


        $postsByCategory = DB::select("select cn.id, cn.TenNganh, count(pdt.id) as soLuong from chuyennganh cn 
        left join phieudangtuyen pdt on cn.id = pdt.MaNganh 
        group by cn.id, cn.TenNganh");

        $fastPosts = PhieuDangTuyen::take(10)->get();
        $fastestPosts = PhieuDangTuyen::take(10)->get();
        $postsForYou = PhieuDangTuyen::take(10)->get();

        $bestSalaryPosts1 = PhieuDangTuyen::Where('LuongKhoiDiem','>=',10)->take(10)->get();
        $bestSalaryPosts2 = PhieuDangTuyen::Where('LuongKhoiDiem','>=',10)->skip(10)->take(10)->get();

        $phieudangtuyen_hot=PhieuDangTuyen::Where('LuongKhoiDiem','>',5)->get();

        $promotion1 = QuangCao::take(1)->get()[0];
        $promotion2 = QuangCao::skip(1)->take(1)->get()[0];
        $number10trieu=count(PhieuDangTuyen::Where('LuongKhoiDiem','>=',10)->get());


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
                'promotion2' => $promotion2,
                'number10trieu'=> $number10trieu
            ]);
    }
    public function getDangKy(){
        return view('page.dang-ky');
    }

    //  dang ky nguoi tim viec
    
    public function getDangKyNTV(){
        return view('page.dang-ky-NTV');
    }
    public function postDangKyNTV(Request $request){
        $this->validate($request,
        [
            'email'=>'required|unique:users|min:3|max:100',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'HoTen'=>'required|min:3|max:100',
            'NgaySinh'=>'required',
            'DiaChi'=>'required|min:3|max:100',
            'TinhTrangHonNhan'=>'required|min:3|max:100'
        ],
        [
            'email.required'=>'Bạn không được để trống tên đăng nhập',
            'email.unique'=>'Bạn không được nhập trùng với email đã tồn tại ',
            'email.min'=>'Bạn nhập ít nhất 3 ký tự',
            'email.max'=>'Bạn phải nhập ít hơn 100 ký tự',
            'password.required'=>'Bạn không được để trống mật khẩu',
            'confirm_password.required'=>'Bạn không được để trống nhập lại mật khẩu',
            'confirm_password.same'=>'Bạn phải nhập giống mật khẩu',
            'HoTen.required'=>'Bạn không được để trống tên nhà tuyển dụng',
            'HoTen.min'=>'Bạn nhập tên nhà dụng ít nhất 3 ký tự',
            'HoTen.max'=>'Bạn phải nhập tên nhà tuyển dụng ít hơn 100 ký tự',
            'NgaySinh.required'=>'Bạn không được để trống ngày sinh',
            'DiaChi.required'=>'Bạn không được để trống địa chỉ',
            'DiaChi.min'=>'Bạn nhập địa chỉ ít nhất 3 ký tự',
            'DiaChi.max'=>'Bạn phải nhập địa chỉ ít hơn 500 ký tự',
            'TinhTrangHonNhan.required'=>'Bạn không được để trống tình trạng hôn nhân',
            'TinhTrangHonNhan.min'=>'Bạn nhập tình trạng hôn nhân ít nhất 3 ký tự',
            'TinhTrangHonNhan.max'=>'Bạn phải nhập tình trajgn hôn nhân ít hơn 100 ký tự',
        ]);

        DB::beginTransaction();
        try {
            $loaitaikhoan=LoaiTaiKhoan::where('TenLoaiTaiKhoan', 'Người tìm việc')->first();
            $user = new User();
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->MaLoaiTaiKhoan=$loaitaikhoan->id;
            $user->save();

            $nguoitimviec = new HoSoXinViec();
            $nguoitimviec->MaTaiKhoan=$user->id;
            $nguoitimviec->MaNganh=ChuyenNganh::first()->id;
            $nguoitimviec->MaTrinhDo=TrinhDo::first()->id;
            $nguoitimviec->MaCC=ChungChi::first()->id;
            $nguoitimviec->TieuDe='';
            $nguoitimviec->HoTen=$request->HoTen;
            $nguoitimviec->NgaySinh=$request->NgaySinh;
            if($request->GioiTinh=='nam'){
                $nguoitimviec->GioiTinh="Nam";
            }
            else{
                $nguoitimviec->GioiTinh="Nữ";
            }
            $nguoitimviec->DiaChi=$request->DiaChi;
            $nguoitimviec->DienThoai=$request->DienThoai;
            $nguoitimviec->TinhTrangHonNhan=$request->TinhTrangHonNhan;
            $nguoitimviec->LuongKhoiDiem=0;  
            $nguoitimviec->NoiLamViec='';
            $nguoitimviec->KinhNghiem='';
            $nguoitimviec->NguyenVongLamViec='';
            $nguoitimviec->MaTaiKhoan = $user->id;
            if($request->hasFile('HinhAnh')){
                $file=$request->file('HinhAnh');
                $name=$file->getClientOriginalName();
                $HinhAnh=str_random(10)."_".$name;
                $file->move('image_HoSo',$HinhAnh);
                $nguoitimviec->HinhAnh=$HinhAnh;
            }
            else{
                $nguoitimviec->HinhAnh="";
            }
          
            $nguoitimviec->save();
            DB::commit();
        }
        catch (Exception $e) {
            DB::rollBack();
            echo $e;
            exit();
            $validator->addMessage("Có lỗi xảy ra!!! Vui lòng kiểm tra lại");
        }
        $messageSuccess = "Xin chúc mừng. Bạn đã đăng ký thành công tài khoản. Vui lòng đăng nhập để sử dụng dịch vụ của chúng tôi";
    return view('page.dang-ky-NTV', ['messageSuccess' => $messageSuccess]);
    }
    
    //  dang ky nha tuyen dung
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

    public function getTaoHoSo() {
        $id = Auth::user()->id;
        $hoSo = HoSoXinViec::where('MaTaiKhoan', $id)->first();
        // $hoSo = HoSoXinViec::first();
        $nganhs = ChuyenNganh::all();
        $trinhDos = TrinhDo::all();
        $chungChis = ChungChi::all();

        return view('page.tao-ho-so', ['hoSo'=>$hoSo, 'nganhs'=>$nganhs, 'trinhDos'=>$trinhDos, 'chungChis'=>$chungChis]);
    }

    public function postTaoHoSo(Request $request){
        $this->validate($request,
        [
            'TieuDe'=>'required|min:3|max:100',
            'HoTen'=>'required|min:3|max:100',
            'DiaChi'=>'required|min:3|max:200',
            'DienThoai'=>'required|min:9|max:12',
            'NgaySinh'=>'required',
            'MaNganh'=>'required',
            'MaTrinhDo'=>'required',
            'MaCC'=>'required',
            'LuongKhoiDiem'=>'required|min:1|max:3'
            
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
            'MaNganh.required'=>'Bạn không được để trống chuyên ngành',
            'MaTrinhDo.required'=>'Bạn không được để trống mã trình độ',
            'MaCC.required'=>'Bạn không được để trống mã chứng chỉ',
            'LuongKhoiDiem.required'=>'Bạn không được để trống lương khởi điểm',
            'LuongKhoiDiem.integer'=>'Bạn không nhập lương là một số',
            'LuongKhoiDiem.max'=>'Bạn nhập lương khởi điểm dưới 1000 triệu',
            'LuongKhoiDiem.min'=>'Bạn nhập lương khởi điểm 1 triệu',
        ]);

        DB::beginTransaction();
        try {
            $id = Auth::user()->id;
            $hosoxinviec = HoSoXinViec::where('MaTaiKhoan', $id)->first();
            // $hosoxinviec = HoSoXinViec::first();
            $hosoxinviec->MaNganh =$request->MaNganh;
            $hosoxinviec->MaTrinhDo=$request->MaTrinhDo;
            $hosoxinviec->MaCC=$request->MaCC;
            $hosoxinviec->TieuDe=$request->TieuDe;
            
            $hosoxinviec->NgaySinh=$request->NgaySinh;
            if($request->GioiTinh=='nam'){
                $hosoxinviec->GioiTinh="Nam";
            }
            else{
                $hosoxinviec->GioiTinh="Nữ";
            }
            // $hosoxinviec->GioiTinh=$request->GioiTinh;
            $hosoxinviec->DiaChi=$request->DiaChi;
            $hosoxinviec->DienThoai=$request->DienThoai;
            $hosoxinviec->TinhTrangHonNhan=$request->TinhTrangHonNhan;
            $hosoxinviec->LuongKhoiDiem=$request->LuongKhoiDiem;
            $hosoxinviec->NoiLamViec='';
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
            DB::commit();
        }
        catch (Exception $e) {
            DB::rollBack();
            $validator->addMessage("Có lỗi xảy ra!!! Vui lòng kiểm tra lại");
        }
        $nganhs = ChuyenNganh::all();
        $trinhDos = TrinhDo::all();
        $chungChis = ChungChi::all();
        $messageSuccess = "Cập nhật hồ sơ thành công";
        // return view('page.tao-ho-so', ['hoSo'=>$hosoxinviec, 'nganhs'=>$nganhs, 'trinhDos'=>$trinhDos, 'chungChis'=>$chungChis, 'messageSuccess'=>$messageSuccess]);
        $phieudangtuyen=PhieuDangTuyen::Where('MaNganh','=',$hosoxinviec->MaNganh)->get();
        return view('page.goi-y-nguoitimviec',['hosoxinviec'=>$hosoxinviec,'phieudangtuyen'=>$phieudangtuyen]);
    }
    //  dang tin tuyen dung
    public function getTaoPhieuDangTuyen(){
        $trinhdo=TrinhDo::all();
        $chuyennganh=ChuyenNganh::all();
        $chungchi=ChungChi::all();
        return view('page.dang-tin-tuyen-dung',['trinhdo'=>$trinhdo,'chuyennganh'=>$chuyennganh,'chungchi'=>$chungchi]);
    }
    public function postTaoPhieuDangTuyen(Request $request){
        $this->validate($request,
        [
            'TieuDe'=>'required|min:3|max:100',
            'ViTriTuyenDung'=>'required|min:3|max:100',
            'MoTaCV'=>'required|min:3|max:2500',
            'NoiLamViec'=>'required|min:3|max:500',
            'ThoiHanNopHoSo'=>'required',
        ],
        [
            'TieuDe.required'=>'Bạn không được để trống tiêu đề',
            'TieuDe.min'=>'Bạn nhập tiêu đề ít nhất 3 ký tự',
            'TieuDe.max'=>'Bạn phải nhập tiêu đề ít hơn 100 ký tự',
            'ViTriTuyenDung.required'=>'Bạn không được để trống vị trí tuyển dụng',
            'ViTriTuyenDung.min'=>'Bạn nhập vị trí tuyển dụng ít nhất 3 ký tự',
            'ViTriTuyenDung.max'=>'Bạn phải nhập vị trí tuyển dụng ít hơn 100 ký tự',
            'MoTaCV.required'=>'Bạn không được để trống mô tả công việc',
            'MoTaCV.min'=>'Bạn nhập mô tả công việc ít nhất 3 ký tự',
            'MoTaCV.max'=>'Bạn phải nhập mô tả công việc ít hơn 2500 ký tự',
            'NoiLamViec.required'=>'Bạn không được để trống nơi làm việc',
            'NoiLamViec.min'=>'Bạn nhập nơi làm việc ít nhất 3 ký tự',
            'NoiLamViec.max'=>'Bạn phải nhập nơi làm việc ít hơn 500 ký tự',
            'ThoiHanNopHoSo.required'=>'Bạn không được để trống thời hạn nộp hồ sơ',
        ]);
        DB::beginTransaction();
        try {
        $phieudangtuyen = new PhieuDangTuyen();
        $phieudangtuyen->TieuDe=$request->TieuDe;
        $phieudangtuyen->ViTriTuyenDung=$request->ViTriTuyenDung;
        $phieudangtuyen->SoLuongTuyenDung=$request->SoLuongTuyenDung;
        $phieudangtuyen->MoTaCV=$request->MoTaCV;
        $phieudangtuyen->MaTrinhDo = $request->MaTrinhDo;
        $phieudangtuyen->MaNganh = $request->MaNganh;
        $phieudangtuyen->MaChungChi = $request->MaChungChi;
        $phieudangtuyen->YeuCauKinhNghiem = $request->YeuCauKinhNghiem;
        $phieudangtuyen->NoiLamViec = $request->NoiLamViec;
        $phieudangtuyen->LuongKhoiDiem = $request->LuongKhoiDiem;
        $phieudangtuyen->ThoiHanNopHoSo = $request->ThoiHanNopHoSo;
        $phieudangtuyen->MaNTD = Auth::user()->id;
        $phieudangtuyen->Hot = 0;
        $phieudangtuyen->save();
        DB::commit();
        }
        catch (Exception $e) {
            DB::rollBack();
            $validator->addMessage("Có lỗi xảy ra!!! Vui lòng kiểm tra lại");
        }

    $trinhdo=TrinhDo::all();
    $chuyennganh=ChuyenNganh::all();
    $chungchi=ChungChi::all();
    $messageSuccess = "Xin chúc mừng. Bạn đã tạo phiếu đăng tuyển thành công.";
    return view('page.dang-tin-tuyen-dung', ['messageSuccess' => $messageSuccess,'trinhdo'=>$trinhdo,'chuyennganh'=>$chuyennganh,'chungchi'=>$chungchi]);
    }
    
    public function getNhaTuyenDung(){
        return view('page.tim-nhan-vien');
    }

    public function getPostDetail($id) {
        $post = PhieuDangTuyen::find($id);
        return view('page.post', ['post' => $post]);
    }
    
    public function getVendorDetail($id) {
        $vendor = NhaTuyenDung::find($id);
        return view('page.vendor', ['vendor' => $vendor]);
    }
    public function getCategoryDetail($id) {
        $category = ChuyenNganh::find($id);
        return view('page.category', ['category' => $category]);
    }

    public function getSkills() {
        $skills = KyNangXinViec::all();
        return view('page.ky-nang-xin-viec', ['skills'=> $skills]);
    }

    public function getSkillDetail($id) {
        $skill = KyNangXinViec::find($id);
        return view('page.chi-tiet-ky-nang-xin-viec', ['skill' => $skill]);
    }

    public function search(Request $request) {
        $keyword = $request->keyword;
        $category = $request->category;

        $posts = PhieuDangTuyen::orWhere('TieuDe', 'like', '%' . $keyword . '%');
        if($category) {
            $posts = $posts ->where('MaNganh', $category);
        }
        return view('page.tim-kiem', ['posts' => $posts->get()]);
    }
    // 
    public function getLuong10trieu(){
        $phieudangtuyen=PhieuDangTuyen::Where('LuongKhoiDiem','>=',10)->get();
        return view('page.luong-10-trieu',['phieudangtuyen' => $phieudangtuyen]);
    }
    //  goi y nguoi tim viec khi tao ho so
    public function getGoiyNTV(){
        return view('page.goi-y-nguoitimviec');
    }
    //  chu y dang tin tuyen dung
    public function getChuyDangTin(){
        return view('page.chu-y-dang-tin-tuyen-dung');
    }
}
