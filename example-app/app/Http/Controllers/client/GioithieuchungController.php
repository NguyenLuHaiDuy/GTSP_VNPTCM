<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GioithieuchungController extends Controller
{
    public function gioithieuchung(){
        return view('layouts.client.gioithieu.gioithieuchung');
    }
}
