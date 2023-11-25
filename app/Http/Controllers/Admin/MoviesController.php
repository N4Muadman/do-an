<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movie.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Lưu file vào thư mục trong dự án

        if($request->hasFile('img')){
            $img = $request->file('img');
            $imgName = time() .'-'.'phim.' .$img->extension();
            $img->move('images', $imgName);
        }
        if($request->hasFile('Trailer')){
            $trailer = $request->file('Trailer');
            $trailerName = time() .'-'.'phimTrailer.' .$trailer->extension();
            $trailer->move('trailers', $trailerName);
        }
        if(Movie::create([
            'Ten' => $request->input('Ten'),
            'NgayKhoiChieu' => $request->input('NgayKhoiChieu'),
            'ThoiLuongChieu' => $request->input('ThoiLuongChieu'),
            'img' => $imgName,
            'TheLoai' => $request->input('TheLoai'),
            'DienVien' => $request->input('DienVien'),
            'QuocGia' => $request->input('QuocGia'),
            'Trailer' => $trailerName,
            'DaoDien' => $request->input('DaoDien'),
            'NoiDung' => $request->input('NoiDung'),
            'status' => $request->input('status')
        ])){
            return redirect()->route('movie.index')->with('success', 'Them moi thanh cong!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::findOrFail($id);

        return view('admin.movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);

        return view('admin.movie.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $movie = Movie::findOrFail($id);

        if($request->hasFile('img')){
            $img = $request->file('img');
            $imgName = time() .'-'.'phim.' .$img->extension();
            $img->move('images', $imgName);
        }
        else $imgName = $request->input('img');
        if($request->hasFile('Trailer')){
            $trailer = $request->file('Trailer');
            $trailerName = time() .'-'.'phimTrailer.' .$trailer->extension();
            $trailer->move('trailers', $trailerName);
        }
        else $trailerName = $request->input('Trailer');
        if($movie->update([
            'Ten' => $request->input('Ten'),
            'NgayKhoiChieu' => $request->input('NgayKhoiChieu'),
            'ThoiLuongChieu' => $request->input('ThoiLuongChieu'),
            'img' => $imgName,
            'TheLoai' => $request->input('TheLoai'),
            'DienVien' => $request->input('DienVien'),
            'QuocGia' => $request->input('QuocGia'),
            'Trailer' => $trailerName,
            'DaoDien' => $request->input('DaoDien'),
            'NoiDung' => $request->input('NoiDung'),
            'status' => $request->input('status')
        ])){
            return redirect()->route('movie.index')->with('success', 'Sua thanh cong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function changeStatus(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->updateOrInsert([
            'status' => 0,
        ]);
        return redirect()->route('movie.index')->with('success', 'Đã đổi phim '.$movie->Ten .' qua danh mục phim dừng chiếu');
    }
}
