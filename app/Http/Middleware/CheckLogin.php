<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->IsLogin()){
            return redirect()->back()->with(['notification' => 'Vui lòng đăng nhập vào hệ thống trước khi chọn ghế']);
        }
        return $next($request);
    }
    public function IsLogin(){
        return !session()->has('user_id');
    }
}
