<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Adminlogin_middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user=Auth::user();
            if($user->MaLoaiTaiKhoan==1){
                return $next($request);
            }
           else if($user->MaLoaiTaiKhoan==2){
                return redirect('dang-tin');
           }
           else{
               return redirect('tao-ho-so');
           }
        }
        else{
            
            return redirect('admin/dangnhap');
            
        }
        
    }

}
