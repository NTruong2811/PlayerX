<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\Users;

class Ad_cateController
{

    public function index()
    {
        $all_cate = Categories::all();
        return view("Ad_cateView", [
            'all_cate' => $all_cate
          ]);
    }
    public function add_cate()
    {
        return view("Cate_addView", [
          ]);
    }
    public function save_add()
    {
       $new_cate = new Categories();
       $new_cate->cate_name = $_POST['cate_name'];
       $new_cate->save();
       header('location: ' . BASE_URL . 'admin/categories');
    }
    public function delete_cate($id)
    {
        Categories::destroy($id);
        header('location: ' . BASE_URL . 'admin/categories');
    }
    public function update_cate($id)
    {
        $select_cate = Categories::find($id);
        return view("Cate_updateView", [
          'cate' => $select_cate
        ]);
    }
    public function save_update($id)
    {
        $select_cate = Categories::find($id);
      $select_cate->cate_name = $_POST['cate_name'];
      $select_cate->save();
      header('location: ' . BASE_URL . 'admin/categories');
    }
}
