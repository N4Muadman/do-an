<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AllUser;

class RegisterController extends Controller
{
    public function register(Request $request){
        $checkName = AllUser::where('TenDangNhap', $request->input('tendangnhap'))->get();
        if(!$checkName->isEmpty()){
            return redirect()->back()->with(['ErrorNameRg' => 'Tên đăng nhập đã có người sử dụng, vui lòng nhập tên khác!']);
        }
        $checkName = AllUser::where('Email', $request->input('email'))->get();
        if(!$checkName->isEmpty()){
            return redirect()->back()->with(['ErrorEmailRg' => 'Email đã có người sử dụng, vui lòng nhập Email khác!']);
        }
        $password = $request->input('matkhau');

        // Mã hóa mật khẩu với bcrypt và lưu vào cơ sở dữ liệu
        $hashedPassword = Hash::make($password);

        if(AllUser::create([
            'TenDangNhap' => $request->input('tendangnhap'),
            'Email' => $request->input('email'),
            'MatKhau' => $hashedPassword,
            'IsActive' => True,
            'role' => '1',
            'Img' => 'User.png',
        ])){
            return redirect()->back()->with(['Registeredsuccess' => 'Đăng kí thành công, vui lòng đăng nhập vào hệ thống']);
        }
        else return redirect()->back()->with(['Registeredsuccess' => 'Đăng kí chưa thành công, vui lòng đăng kí lại!']);

    }
}
