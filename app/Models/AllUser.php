<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllUser extends Model
{
    protected $table='userkhachhang';
    protected $fillable = [
        'TenDangNhap',
        'MatKhau',
        'Email',
        'HoTen',
        'SDT',
        'IsActive',
        'Img',
        'role',
    ];
    use HasFactory;
}
