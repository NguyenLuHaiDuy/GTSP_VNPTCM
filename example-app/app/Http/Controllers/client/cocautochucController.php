<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cocautochucController extends Controller
{
    public function tochuc(){
        return view('layouts.client.gioithieu.cocautochuc');
    }
}
