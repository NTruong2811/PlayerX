<?php

namespace App\Controllers;

use App\Models\Users;

class loginController
{
  protected $user_ojb;
  public function index()
  {
    return view("LoginView", []);
  }
  public function perform_login()
  {
      $result = Users::where('email', $_POST['email_input'])
        ->where('password', $_POST['pass_input'])
       ->first() ;
        if($result==null){
          echo '<script>
          alert("Account does not exist!");
        </script>';
        return view("LoginView", []);
        }
        else{
          $_SESSION['user'] = [
            'user_id' => $result->user_id,
            'full_name' => $result->full_name,
            'name' => $result->name,
            'age' => $result->age,
            'role' => $result->role,
            'email' => $result->email,
            'pass' => $result->password,
            'avt' => $result->avt
          ];
          // print_r($_SESSION);
          header("location:" . BASE_URL);
        }
  }
}
