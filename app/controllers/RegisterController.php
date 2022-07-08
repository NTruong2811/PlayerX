<?php

namespace App\Controllers;

use App\Models\Users;

class RegisterController
{
  public function index()
  {
    return view("RegisterView", []);
  }
  public function perform_register()
  {
    $model = new Users();
    $model->full_name = $_POST['fullname_input'];
    $model->name = $_POST['name_input'];
    $model->age = $_POST['age'];
    $model->role = 1;
    $model->email = $_POST['email'];
    $model->password = $_POST['pass_input'];
    $model->save();
    header("location:" . BASE_URL."/login");
  }
}
