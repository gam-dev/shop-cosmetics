<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RuleSignup;
use App\Models\UserP;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //

    public function index(){
        return view('login');
    }

    public function home(){

        $name = session()->get('user');
        $user = UserP::where('name','=', $name)->first();

        $item = Product::where('status', 'Bán chạy')->get();
        
        return view('index',["a" => $item]);

        return view('index',[
            'user' => $user
        ]);
    }

    public function checkLogin(Request $request) // phần admin vẫn đang bị lỗi nhưng không ảnh hưởng tới đăng nhập của người dùng
{
    $user = UserP::where('phone', '=', $request->input('phone'))->first(); //kiểm tra thông tin của người dùng
    $admin = Admin::where('phonead', '=', $request->input('phone'))->first();// kiểm tra thông tin cho admin

    if ($user && Hash::check($request->input('password'), $user->password)) {
        // đăng nhập thành công cho người dùng thông thường
        $request->session()->put('user', $user->phone);
        return redirect()->to("./");
    } elseif ($admin && Hash::check($request->input('password'), $admin->passwordad)) {
        // đăng nhập thành công cho admin
        $request->session()->put('admin', $admin->phonead);
        return redirect()->to("/adindex");
    } else {
        // thông báo lỗi
        return back()->withErrors([
            'loi' => 'Thông tin đăng nhập chưa đúng'
        ]);
    }
}

    // hàm đăng ký
    public function signup(RuleSignup $request){
        // thực hiện lưu thông tin đăng ký
        UserP::create([
            "name"=> $request->input('name'),
            "phone" => $request->input('phone'),
            "password" => Hash::make($request->input('password'))
        ]);
        // sau khi đăng ký xong, chuyển sang trang login
        return redirect()->to("./login");
    }
    public function logout(Request $request){

        // xóa session
        $request->session()->flush();
        
        // quay trở về trang chủ
        return redirect()->to("./");

    }
    
}
