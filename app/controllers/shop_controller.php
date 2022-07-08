<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Products;

class Shop_Controller
{

    public function index()
    {
        $products = Products::all();
        return view("shop_view", [
            "products" => $products
        ]);
    }
    public function search()
    {
        $products = Products::where('product_name','like', "%".$_POST['search']."%")
        ->get();
        return view("shop_view", [
            "products" => $products
        ]);
    }
}
