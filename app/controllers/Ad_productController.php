<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Users;

class Ad_ProductController
{
    
    public function index()
    {
        $all_product = Products::all();
        return view("Ad_productView", [
            'all_product' => $all_product
          ]);
    }
    public function add_pr()
    {       $all_cate = Categories::all();
        return view("Pr_addView", [
            'all_cate' => $all_cate
          ]);
    }
    public function save_add()
    {
        $new_product = new Products();
        $new_product->product_name = $_POST['name'];
        $new_product->price = $_POST['price'];
        $new_product->img = $_FILES['img']['name'];
        $new_product->description = $_POST['desc'];
        $new_product->sale = $_POST['sale'];
        $new_product->view = $_POST['view'];
        $new_product->categories = $_POST['cate'];
        $new_product->save();
        print_r($_FILES['img']['name']);
        header('location: ' . BASE_URL . 'admin/products');
    }

    public function update_pr($id)
    {
        $select_pr = Products::find($id);
        return view("pr_updateView", [
          'product' => $select_pr
        ]);
    }
    public function save_update($id)
    {
        $select_pr = Products::find($id);
        $select_pr->product_name = $_POST['name'];
        $select_pr->price = $_POST['price'];
        $select_pr->description = $_POST['desc'];
        $select_pr->sale = $_POST['sale'];
        $select_pr->view = $_POST['view'];
        $select_pr->save();
      header('location: ' . BASE_URL . 'admin/products');
    }
    public function delete_pr($id)
    {
        Products::destroy($id);
        header('location: ' . BASE_URL . 'admin/products');
    }
}
