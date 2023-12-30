<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\AllUser;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login.index');
    }
    public function login(Request $request){
        $enteredPassword = $request->input('matkhau'); // Mật khẩu nhập vào từ người dùng

        $user = AllUser::where('TenDangNhap', $request->input('tendangnhap'))
            ->where('role', 2)
            ->first(); // Lấy thông tin người dùng dựa trên tên đăng nhập và role

        if ($user && Hash::check($enteredPassword, $user->MatKhau)) {
            // Mật khẩu nhập vào trùng khớp với mật khẩu đã được mã hóa trong cơ sở dữ liệu
            session(['user_admin_id' => $user->Id, 'user_admin_img' => $user->Img, 'user_admin_name' => $user->TenDangNhap]);
            return redirect()->route('admin.dashboard');

        } else {
            // Mật khẩu không khớp hoặc người dùng không tồn tại
            return redirect()->route('admin.login.index')->with(['ErrorNameLogin' => 'Tên đăng nhập hoặc mật khẩu không tồn tại, vui lòng nhập lại!']);
        }
    }
    public function Logout(){
        session()->forget('user_admin_id', 'user_admin_img');
        return redirect()->back();
    }
}
