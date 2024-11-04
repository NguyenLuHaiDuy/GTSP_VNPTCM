<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class khachhangController extends Controller
{
    public function khachhang() // Changed from khachnang to khachhang
    {
        return view('layouts.client.gioithieu.khachhang');
    }
}

