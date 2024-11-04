<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoctrainghiemController extends Controller
{
    public function trainghiem(){
        return view('layouts.client.goctrainghiem.goctrainghiem');
    }
}
