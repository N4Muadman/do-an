<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckChair
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->IsChair()){
            return redirect()->route('chonghe')->with(['notification' => 'Vui lòng chọn ghế trước khi đặt vé']);
        }
        return $next($request);
    }
    public function IsChair(){
        return !session()->has('chairs_values');
    }
}
