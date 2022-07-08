<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Products;

class CartController
{

  public function index()
  {
    $cart_list = Cart::where('user_id', $_SESSION['user']['user_id'])
      ->join('products', 'products.id_product', '=', 'cart.product_id')
      ->get();
    return view("cartView", [
      'cart_list' => $cart_list
    ]);
  }

  public function add_to_cart($id)
  {

    $find_product = Cart::where('product_id', $id)->first();

    if (isset($find_product->product_id)) {
      $find_product->quantity = $find_product->quantity + 1;
      $find_product->save();
    } else {
      $add_to_cart = new Cart();
      $add_to_cart->quantity = 1;
      $add_to_cart->user_id = $_SESSION['user']['user_id'];
      $add_to_cart->product_id = $id;
      $add_to_cart->save();
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
  public function checkout()
  {
    $cart_list = Cart::where('user_id', $_SESSION['user']['user_id'])
      ->join('products', 'products.id_product', '=', 'cart.product_id')
      ->get();
    $subtotal_list = Cart::selectRaw('products.price * cart.quantity as subtotal, sum(products.price * cart.quantity) as total')
      ->where('user_id', $_SESSION['user']['user_id'])
      ->join('products', 'products.id_product', '=', 'cart.product_id')
      ->get();
    return view("checkout", [
      'cart_list' => $cart_list,
      'subtotal' => $subtotal_list
    ]);
  }
  public function delete_cart($id)
  {
    Cart::destroy($id);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}
