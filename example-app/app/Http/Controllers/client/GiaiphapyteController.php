<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GiaiphapyteController extends Controller
{
    public function yte(){
        return view('layouts.client.sanpham-dichvu.giaiphapyte');
    }
}
