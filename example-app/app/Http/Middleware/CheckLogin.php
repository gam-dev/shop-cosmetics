<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     public function handle(Request $request, Closure $next): Response
    {
        if ($this->checkLogin($request)) {

            // cho đi tiếp
            return $next($request);
        }
        else
        {
            // nếu chưa đăng nhập thì xử lý
            // muốn xử lý gì xử lý
            return redirect(route('login.route'));
        } 
    }
    // hàm kiểm tra login
    public function checkLogin(Request $request)
{
    if ($request->session()->has('user') || $request->session()->has('admin')) {
        return true; 
    } else {
        return false;
    }
}
    
}
