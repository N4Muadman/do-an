<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chairs;
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
        $url = 'https://example.com '; // Thay bằng đường dẫn hoặc nội dung bạn muốn mã QR đại diện
        $qrCode = QrCode::size(300)->generate($url);

        // Lưu ảnh QR code vào thư mục storage/app/public
        $path = 'public/qrcodes/' . uniqid() . '.png';
        $filePath = storage_path($path);
        file_put_contents($filePath, $qrCode);

        // Di chuyển ảnh QR code từ thư mục storage/app/public đến thư mục public
        $newPath = 'qrcodes/' . uniqid() . '.png';
        Storage::move($path, $newPath);

    }
}
