<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiaiphapgiaoducController extends Controller
{
    public function giaoduc(){
        return view('layouts.client.sanpham-dichvu.giaiphapgiaoduc');
    }
}
