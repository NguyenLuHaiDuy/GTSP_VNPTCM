<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tamnhimsumenhController extends Controller
{
    public function sumenh(){
        return view('layouts.client.gioithieu.tamnhinsumenh');
    }
}
