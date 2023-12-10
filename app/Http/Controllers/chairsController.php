<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chairs;
use App\Models\view_Ticket;
class chairsController extends Controller
{
    public function index(){
        $chairs = Chairs::where('phongId', session('phongId'))->get();
        $booktickets = view_Ticket::where('lichchieuId', session('lichchieuId'))->get();
        foreach ($chairs as $item){
            foreach ($booktickets as $bt){
                if($bt->gheId == $item->Id){
                    $item->disable = 'seat_disable';
                }
            }
        }
        return view('chair.index')->with(['chairs' => $chairs]);
    }
    public function ChooseChair(Request $request){
        $checkboxValues = $request->input('chairs');
        if(!is_array($checkboxValues)){
            return redirect()->route('chonghe')->with(['notification' =>  'Bạn chưa chọn ghế, vui lòng lại ghế trước khi thanh toán!']);
        }
        $booktickets = view_Ticket::where('lichchieuId', session('lichchieuId'))->get();
        // Kiểm tra xem checkbox nào đã được chọn
        if (is_array($checkboxValues)) {// Lấy danh sách các giá trị từ session hoặc một mảng rỗng nếu chưa tồn tại

            foreach ($checkboxValues as $value) {
                $found = false;
                if (!$booktickets->isEmpty()) {
                    foreach ($booktickets as $bt) {
                        if ($bt->gheId == $value) {
                            $found = true;
                            break; // Kết thúc vòng lặp khi tìm thấy gheId trùng
                        }
                    }
                }

                if ($found) {
                    return redirect()->route('chonghe')->with(['notification' => 'Ghế ' . $value . ' đã được chọn, vui lòng chọn ghế khác!']);
                } else {
                    $chairsValues[] = $value;
                }

                // Thêm giá trị từng checkbox vào danh sách session nếu nó chưa tồn tại trong danh sách

            }

            session(['chairs_values' => $chairsValues]);

            return redirect()->route('datve');
        }
    }
}
