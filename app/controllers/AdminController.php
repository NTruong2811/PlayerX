<?php
namespace App\Controllers;

use App\Models\Products;

class AdminController
{  
    public function index()
    {
      return view("AdminView", [
      ]);
    }
}
