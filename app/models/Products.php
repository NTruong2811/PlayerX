<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  protected $table = 'products';
  public $primaryKey = 'id_product';
  public $timestamps = false;


  // public function new_product()
  // {
  //   $sql = "SELECT * FROM products ORDER BY id_product DESC LIMIT 4";
  //   return $this->model_ojb->select_items($sql);
  // }

  // public function delete_pr($id)
  // {
  //   $sql = "delete from products where id_product = $id";
  //   $this->model_ojb->execute($sql);
  // }
  // public function select_pr($id)
  // {
  //   $sql = "select * from products where id_product = $id";
  //   return  $this->model_ojb->select_one($sql);
  // }

  // public function update_pr($product_ud)
  // {
  //   extract($product_ud);
  //   $path = BASE_URL . "public/upload/img/avatar/";
  //   move_uploaded_file($image, $path);
  //   $sql = "update products set product_name = '$product_name', price = $price, img = '$image', sale = $sale , view = $view, description = '$desc' where id_product = $product_id";
  //   $this->model_ojb->execute($sql);
  // }

  // public function add_to_cart($id_pr, $user_id, $quantity)
  // {
  //   $sql_select = "SELECT * FROM products WHERE id_product = $id_pr";
  //   $result_select = $this->model_ojb->select_one($sql_select);
  //   extract($result_select);
  //   $sql = "INSERT INTO cart(price,quantity,user_id,product_id)
  //             VALUE($price,$quantity,$user_id,$id_pr)";
  //   $this->model_ojb->execute($sql);
    
  // }
}
