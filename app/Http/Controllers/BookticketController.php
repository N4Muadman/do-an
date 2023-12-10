<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chairs;
use App\Models\BookTickets;
use App\Models\DetailTicket;
use App\Models\view_Ticket;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookticketController extends Controller
{
    public function index(){
        $listchairs = session('chairs_values');
        $Lchairs = Chairs::whereIn('Id', $listchairs)->get();
        $coutC = count($Lchairs);
        session(['total' =>  ($coutC * session('Gia'))]);
        return view('bookticket.index', compact('Lchairs'));
    }
    public function payment(){
        if(session('chairs_values')){
            $arrayIdGhe = session('chairs_values');
            // Khởi tạo chuỗi $url
            $contentQr = 'VÉ CỦA BẠN LÀ:   ' .
                    'Phim: ' . session('tenPhim') .' ( '.session('Thoilc') . ' )  ' .
                    session('quocgia').'  ' .
                    'Chi nhanh: '.session('tenChinhanh') .' - ' .session('tenPhong') .'   '.
                    'Suất chiếu: ' . session('Gio') .' - ' .session('Ngay') .'   '.
                    'Ghế: ';

            foreach ($arrayIdGhe as $idGhe) {
                // Truy vấn cơ sở dữ liệu để lấy thông tin ghế dựa trên ID
                $ghe = Chairs::find($idGhe);

                if ($ghe) {
                    // Lấy tên ghế từ đối tượng $ghe
                    $tenGhe =  $ghe->Hang .$ghe->Ten ;
                    // Thêm tên ghế vào chuỗi $contentQr
                    $contentQr .= $tenGhe . ', ';
                }
            }
            $contentQr = rtrim($contentQr, ', ') ;
            $encodedContent = Str::ascii($contentQr);
        }

        $bookticket = BookTickets::create([
            'KhachHangId' => session('user_id'),
            'LichChieuId' => session('lichchieuId'),
            'MaQR' => $encodedContent,
            'total' => session('total'),
        ]);
        $bookticket = $bookticket->fresh();
        // Tạo chi tiết đơn hàng cho đơn hàng vừa tạo
        if(session('chairs_values')){
            $arrayIdGhe = session('chairs_values');
            foreach ($arrayIdGhe as $idGhe){
                DetailTicket::create([
                    'veId' => $bookticket->Id,
                    'gheId' => $idGhe
                ]);
            }
        }
        session(['newTicketId' => $bookticket->Id]);
        session()->forget(['Gio', 'tenChinhanh', 'chinhanhid', 'tenPhim', 'imgPhim', 'Thoilc', 'quocGia',
        'phongId', 'tenPhong', 'lichchieuId', 'Gia', 'chairs_values']);

        return redirect()->route('newticket');
    }
    public function newticket(){
        $newTicket = view_Ticket::where('veId', session('newTicketId'))->where('KhachHangId', session('user_id'))->get();
        return view('bookticket.newticket')->with('newTicket', $newTicket);
    }
}
