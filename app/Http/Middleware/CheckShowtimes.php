<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckShowtimes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
     public function handle(Request $request, Closure $next): Response
    {
        if($this->IsShowtimes()){
            return redirect()->route('lichchieu')->with(['notification' => 'Vui lòng chọn phim và suất chiếu trước khi chọn ghế']);
        }
        return $next($request);
    }
    public function IsShowtimes(){
        return !session()->has('lichchieuId');
    }
}
