<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AllUser;

class LoginController extends Controller
{
    public function Login(Request $request){
        $enteredPassword = $request->input('matkhau'); // Mật khẩu nhập vào từ người dùng

        $user = AllUser::where('TenDangNhap', $request->input('tendangnhap'))
            ->where('role', 1)
            ->first(); // Lấy thông tin người dùng dựa trên tên đăng nhập và role

        if ($user && Hash::check($enteredPassword, $user->MatKhau)) {
            // Mật khẩu nhập vào trùng khớp với mật khẩu đã được mã hóa trong cơ sở dữ liệu

            // Thực hiện các hành động tiếp theo ở đây
            // ...
        } else {
            // Mật khẩu không khớp hoặc người dùng không tồn tại
            return redirect()->back()->with(['ErrorNameLogin' => 'Tên đăng nhập hoặc mật khẩu không tồn tại, vui lòng nhập lại!']);
        }

    }
}
