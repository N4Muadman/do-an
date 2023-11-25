<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtimes extends Model
{
    protected $table = ('lichchieu');
    public $timestamps = false;
    protected $fillable = [
            'PhimId',
            'PhongId',
            'Gia',
            'Mota',
            'Ngay',
            'GioBatDau',
            'TrangThai',
    ];
    use HasFactory;
}
