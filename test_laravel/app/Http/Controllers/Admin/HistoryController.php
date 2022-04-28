<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function dinh_dynasty(){
        return view('pages.history.dinh_dynasty');
    }

    public function ly_dynasty(){
        return view('pages.history.ly_dynasty');
    }

    public function ngo_dynasty(){
        return view('pages.history.ngo_dynasty');
    }

    public function tran_dynasty(){
        return view('pages.history.tran_dynasty');
    }

    public function ho_dynasty(){
        return view('pages.history.ho_dynasty');
    }
}
