<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllUser;

class UserController extends Controller
{
    public function index(){
        $user = AllUser::where('role', '1')->get();
        return view('admin.user.index')->with(['user'=> $user]);
    }
}
