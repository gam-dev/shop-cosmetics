<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShowProduct extends Controller
{
    //
    public function show($namePro)
    {
        $item = Product::find($namePro)->get();
        return view('sanpham', compact('item'));
    }
}
