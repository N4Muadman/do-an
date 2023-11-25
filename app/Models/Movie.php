<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = ('phim');
    protected $fillable = [
            'Ten',
            'NgayKhoiChieu',
            'ThoiLuongChieu',
            'TheLoai',
            'QuocGia',
            'DienVien',
            'img',
            'Trailer',
            'DaoDien',
            'NoiDung',
            'status'
    ];
    use HasFactory;
}
