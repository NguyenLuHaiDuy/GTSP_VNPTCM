<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiaiphapdoanhnghiepController extends Controller
{
    public function doanhnghiep(){
        return view('layouts.client.sanpham-dichvu.giaiphapdoanhnghiep');
    }
}
