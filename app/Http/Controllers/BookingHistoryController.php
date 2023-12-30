<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view_Ticket;

class BookingHistoryController extends Controller
{
    public function index(){
        $listTicket = view_Ticket::where('KhachHangId', session('user_id'))->orderBy('ThoiGiaDat', 'DESC')->get();
        return view('booking_history.index')->with(['listTicket' => $listTicket]);
    }
}
