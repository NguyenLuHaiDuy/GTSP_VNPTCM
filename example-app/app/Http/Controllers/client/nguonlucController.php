<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nguonlucController extends Controller
{
    public function nguonluc(){
        return view('layouts.client.gioithieu.nguonluc');
    }
}
