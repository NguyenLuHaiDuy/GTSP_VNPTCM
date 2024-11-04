<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tintucvnptitController extends Controller
{
    public function vnptit(){
        return view('layouts.client.tintuc.tinvnpt-it');
    }
}
