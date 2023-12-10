<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_showtime;
use App\Models\Movie;

class BranchController extends Controller
{
    public function index(){
        $showtime = View_showtime::where('TrangThai', '1')->where('Ngay', '>=', date("Y-m-d"))->orderBy('Ngay', 'asc')->get();
        if(!session()->exists(['Ngay', 'khuVuc'])) {
            session(['Ngay' => date('Y-m-d'), 'khuVuc' => '--- Chọn khu vực ---']);
        }
        return view('branch.index')->with(['showtime' => $showtime]);
    }
    public function area($id){
        $showtime = view_showtime::findOrFail($id);
        session(['khuVuc' => $showtime->tenKhuvuc,'Ngay' => date('Y-m-d'), 'Gio' => '', 'chinhanhid' => '']);
        return redirect()->route('chonchinhanh', session('phimid'));
    }
    public function date($id){
        $showtime = view_showtime::findOrFail($id);
        session(['Ngay' => $showtime->Ngay, 'Gio' => '', 'chinhanhid' => '']);
        return redirect()->route('chonchinhanh', session('phimid'));
    }
    public function time($id){
        $showtime = view_showtime::findOrFail($id);
        session(['Gio' => $showtime->GioBatDau, 'tenChinhanh' => $showtime->tenChinhanh,'phongId' => $showtime->PhongId, 'tenPhong' => $showtime->tenPhong, 'lichchieuId' => $showtime->Id, 'Gia' => $showtime->Gia]);
        return redirect()->route('chonghe');
    }
}
