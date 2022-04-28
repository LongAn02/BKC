<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionControler extends Controller
{
    public function create_session(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart');
        if ($cart){
            $is_avaiable = 0;
            foreach ($cart as $key => $val){
                if ($val['product_id'] == $data['id']){
                    $is_avaiable++;
                }
            }
            if ($is_avaiable == 0){
                $cart[] = array(
                    'session_id' => $session_id,
                    'product_id' => $data['id'],
                    'product_name' => $data['cart_name'],
                    'product_price' => $data['cart_price'],
                    'product_image' => $data['cart_image'],
                );
                Session::put('cart',$cart);
            }
        }else{
            $cart[] = array(
                'session_id' => $session_id,
                'product_id' => $data['id'],
                'product_name' => $data['cart_name'],
                'product_price' => $data['cart_price'],
                'product_image' => $data['cart_image'],
            );
        }
        Session::put('cart',$cart);
        Session::put('quantity',count($cart));
        Session::save();
        return count($cart);
    }

    public function delete_session(Request $request){
        $data = $request->all();
        $carts = Session::get('cart');
        foreach ($carts as $key => $val){
            if ($val['session_id'] == $data['session_id_delete']){
                unset($carts[$key]);
                Session::put('cart',$carts);
                Session::put('quantity',count($carts));
                return count($carts);
            }
        }
    }
}
