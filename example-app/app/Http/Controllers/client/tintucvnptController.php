<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tintucvnptController extends Controller
{
    public function vnpt(){
        return view('layouts.client.tintuc.tinvnpt');
    }
}
