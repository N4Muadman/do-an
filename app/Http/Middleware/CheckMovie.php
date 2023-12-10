<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckMovie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($this->IsMovie()){
            return redirect()->route('phimdangchieu')->with(['notification' => 'Vui lòng chọn phim trước khi chọn suất chiếu']);
        }
        return $next($request);
    }
    public function IsMovie(){
        return !session()->has('phimid');
    }

}
