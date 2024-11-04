<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChinhphudientuController extends Controller
{
    public function chinhphudientu(){
        return view ('layouts/client/sanpham-dichvu/chinhphudientu');
    }
}
