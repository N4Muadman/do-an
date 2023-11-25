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
        $total = $coutC * session('Gia');
        return view('bookticket.index', compact('Lchairs', 'total'));
    }
}
