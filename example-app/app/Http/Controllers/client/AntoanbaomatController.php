<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AntoanbaomatController extends Controller
{
    public function antoanbaomat(){
        return view('layouts.client.sanpham-dichvu.antoanbaomat');
    }
}
