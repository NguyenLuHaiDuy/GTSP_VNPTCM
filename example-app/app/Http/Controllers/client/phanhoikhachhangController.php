<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class phanhoikhachhangController extends Controller
{
    public function phanhoi(){
        return view('layouts.client.tintuc.phanhoikhachhang');
    }
}
