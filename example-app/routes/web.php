<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShowProduct;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [LoginController::class, 'home']);


Route::get('/login', [LoginController::class, 'index']);

Route::get('/logout', [LoginController::class, 'logout']);


// Route::get('/danhsach', [LoginController::class, 'danhsach'])->middleware('check.login.middleware');

// Route::get('/api/danhsach/{page}', [LoginController::class, 'laydanhsachtheotrang'])->middleware('check.login.middleware');


Route::post('/login', [LoginController::class, 'checkLogin'])->name('login.route');

Route::get('/signup', function () {
    return view('signup');
})->name('signup.route');

Route::post('/signup', [LoginController::class, 'signup']);

Route::get('/kem', [ItemController::class, 'getforkem']);// lấy dữ liệu dành riêng cho page kem dưỡng da
Route::get('/nuochoa', [ItemController::class, 'getfornuochoa']);// lấy dữ liệu dành riêng cho page nước hoa
Route::get('/sonmoi', [ItemController::class, 'getforsonmoi']);// lấy dữ liệu dành riêng cho page son môi
Route::get('/allpro', [ItemController::class, 'all']);



Route::get('/addnewitem', [ItemController::class, 'index']);
Route::post('/addnewitem', [ItemController::class, 'addnew'])->name('products.add');

Route::get('/sanpham/{id}', [ItemController::class,'show'])->name('sanpham.show');
Route::get('/editproduct', [ItemController::class, 'edit'])->name('editproduct.end');
Route::get('/deleteproduct/{id}', [ItemController::class, 'destroy']);
Route::delete('/editproduct/{id}', [ItemController::class, 'destroy'])->name('products.destroy');
Route::get('/found', [ItemController::class, 'search'])->name('search');
Route::post('/editproduct/{id}', [ItemController::class, 'addsta'])->name('addsta');
Route::get('/banchay', [ItemController::class, 'getsta'])->name('getsta');
