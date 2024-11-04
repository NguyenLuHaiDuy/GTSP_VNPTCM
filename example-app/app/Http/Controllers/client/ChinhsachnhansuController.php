<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChinhsachnhansuController extends Controller
{
    public function nhansu(){
        return view('layouts.client.cohoinghenghiep.chinhsachnhansu');
    }
}
