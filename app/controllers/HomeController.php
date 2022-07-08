<?php

namespace App\Controllers;

use App\Models\Products;

class HomeController
{
  public function index()
  {
    $new_products = Products::orderBy('id_product', 'desc')
      ->take(4)
      ->get();;
    return view("HomeView", [
      'new_products' => $new_products
    ]);
  }

}
