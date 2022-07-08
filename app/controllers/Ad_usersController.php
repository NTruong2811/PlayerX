<?php

namespace App\Controllers;

use App\Models\Products;
use App\Models\Users;

class Ad_usersController
{
  protected $products_ojb;
  protected $users_ojb;
  public function index()
  {
    $all_users = Users::all();
    return view("Ad_usersView", [
      'all_users' => $all_users
    ]);
  }
  public function delete_user($id)
  {
    Users::destroy($id);
    header('location: ' . BASE_URL . 'admin/users');
  }
  public function update_user($id)
  {
    $select_user = Users::find($id);
    return view("User_updateView", [
      'user' => $select_user
    ]);
  }
  public function save_update($id)
  {
    $select_user = Users::find($id);
    $select_user->full_name = $_POST['full_name'];
    $select_user->name = $_POST['name'];
    $select_user->age = $_POST['age'];
    $select_user->role = $_POST['role'];
    $select_user->email = $_POST['email'];
    $select_user->save();
    header('location: ' . BASE_URL . 'admin/users');
  }
}
