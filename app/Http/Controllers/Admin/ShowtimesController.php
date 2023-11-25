<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Showtimes;
use App\Models\view_showtime;
use App\Models\View_room;
use App\Models\Movie;
use Illuminate\Support\Facades\Validator;
class ShowtimesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtimes = view_showtime::where('TrangThai', 1)->orderBy('Ngay', 'desc')->get();

        return view('admin.showtime.index', compact('showtimes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms = View_room::orderBy('tenChinhanh', 'ASC')->select('Id', 'Ten', 'tenChinhanh')->get();
        $movies = Movie::where('status', 1)->where('Ngaykhoichieu', '<=' , date("Y-m-d"))->orderBy('Ten', 'ASC')->select('Id', 'Ten')->get();
        return view('admin.showtime.create')->with(['rooms' => $rooms, 'movies' => $movies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Showtimes::create($request->all())){
            return redirect()->route('showtime.index')->with('success', 'them moi lich chieu thanh cong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $showtime = view_showtime::findOrFail($id);
        $rooms = View_room::orderBy('tenChinhanh', 'ASC')->select('Id', 'Ten', 'tenChinhanh')->get();
        $movies = Movie::where('status', 1)->orderBy('Ten', 'ASC')->select('Id', 'Ten')->get();


        return view('admin.showtime.edit')->with(['rooms' => $rooms, 'movies' => $movies, 'showtime' => $showtime]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'PhimId' =>'required',
            'PhongId'=>'required',
            'Gia'=>'required',
            'Mota'=>'required',
            'Ngay'=>'required',
            'GioBatDau'=>'required',
            'TrangThai'=>'required',
        ]);
        if($validator->fails()){
            return 'ok';
        }
        // dd($request->all());
        $showtime = Showtimes::findOrFail($id);
        $showtime->update([
            'PhimId' =>$request->PhimId,
            'PhongId'=>$request->PhongId,
            'Gia'=>$request->Gia,
            'Mota'=>$request->Mota,
            'Ngay'=>$request->Ngay,
            'GioBatDau'=>$request->GioBatDau,
            'TrangThai'=>$request->TrangThai,
        ]);
        return redirect()->route('showtime.index')->with('success', 'chinh sua lich chieu thanh cong!');
        // $test = $showtime->update($request->all());
        // if($showtime->update($request->all())){
        //     return redirect()->route('showtime.index')->with('success', 'chinh sua lich chieu thanh cong!');
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
