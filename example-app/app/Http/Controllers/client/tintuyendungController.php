<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tintuyendungController extends Controller
{
    public function tuyendung(){
        return view('layouts.client.cohoinghenghiep.tintuyendung');
    }
}
