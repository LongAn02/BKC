<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(12);
        return view('layout.banner.section',[
            'products' => $products,
        ]);
    }

    public function showcart(){
        return view('layout.banner.showcart');
    }
}
