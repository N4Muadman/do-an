<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chairs;
use App\Models\BookTickets;
class chairsController extends Controller
{
    public function index(){
        $chairs = Chairs::where('phongId', session('phongId'))->get();
        $booktickets = BookTickets::where('lichchieuId', session('lichchieuId'))->get();
        foreach ($chairs as $item){
            foreach ($booktickets as $bt){
                if($bt->GheId == $item->Id){
                    $item->disable = 'seat_disable';
                }
            }
        }
        return view('chair.index')->with(['chairs' => $chairs]);
    }
    public function ChooseChair(Request $request){
        $checkboxValues = $request->input('chairs');
        if(!is_array($checkboxValues)){
            return redirect()->route('chonghe')->with(['success' =>  'Bạn chưa chọn ghế, vui lòng lại ghế!']);
        }
        $booktickets = BookTickets::where('lichchieuId', session('lichchieuId'))->get();
        // Kiểm tra xem checkbox nào đã được chọn
        if (is_array($checkboxValues)) {// Lấy danh sách các giá trị từ session hoặc một mảng rỗng nếu chưa tồn tại

            foreach ($checkboxValues as $value) {
                if(is_array($booktickets)){
                    foreach ($booktickets as $bt){
                        if($bt->GheId == $value){
                            return redirect()->route('chonghe')->with(['success' => 'Ghế '.$value .' đã được chọn, vui lòng chọn ghế khác!']);
                        }
                        else {
                            $chairsValues[] = $value;
                        }
                    }
                }
                else $chairsValues[] = $value;

                // Thêm giá trị từng checkbox vào danh sách session nếu nó chưa tồn tại trong danh sách

            }

            session(['chairs_values' => $chairsValues]);

            return redirect()->route('datve');
        }
    }
}
