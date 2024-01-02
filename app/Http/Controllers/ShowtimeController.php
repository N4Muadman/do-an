<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_showtime;

class ShowtimeController extends Controller
{
    public function index(){
        $showtime = View_showtime::where('TrangThai', '1')->where('Ngay', '>=', date("Y-m-d"))->orderBy('Ngay', 'asc')->get();
        if(!session()->exists(['Ngay'])) {
            session(['Ngay' => date('Y-m-d')]);
        }
        if(!session()->exists([ 'khuVuc'])){
            session(['khuVuc' => '--- Tất cả khu vực ---']);
        }
        return view('showtime.index')->with(['showtime' => $showtime]);
    }
    public function area($id){
        $showtime = view_showtime::findOrFail($id);
        session(['khuVuc' => $showtime->tenKhuvuc,'Ngay' => date('Y-m-d'), 'Gio' => '', 'chinhanhid' => '']);
        return redirect()->route('lichchieu');
    }
    public function areaAll(){
        session(['khuVuc' => '--- Tất cả khu vực ---']);
        return redirect()->route('lichchieu');
    }
    public function date($id){
        $showtime = view_showtime::findOrFail($id);
        session(['Ngay' => $showtime->Ngay, 'Gio' => '', 'chinhanhid' => '']);
        return redirect()->route('lichchieu');
    }
    public function time($id){
        $showtime = view_showtime::findOrFail($id);
        session(['Gio' => $showtime->GioBatDau,'tenChinhanh' => $showtime->tenChinhanh , 'chinhanhid' => $showtime->chinhanhId]);
        return redirect()->route('lichchieu');
    }
    public function movie($id){
        $showtime = view_showtime::findOrFail($id);
        session(['tenPhim' => $showtime->tenPhim, 'imgPhim' => $showtime->imgPhim,'Thoilc' => $showtime->ThoiLuongChieu,
        'quocGia' => $showtime->QuocGia, 'phongId' => $showtime->PhongId, 'tenPhong' => $showtime->tenPhong, 'lichchieuId' => $showtime->Id,
        'Gia' => $showtime->Gia]);
        return redirect()->route('chonghe');
    }
}
