<?php
if (session_id() == '') {
    session_start();
}
require_once "./commons/helpers.php";
require_once "./commons/config.php";
require_once "./vendor/autoload.php";
require_once "./commons/utils.php";
require_once "./commons/routing.php";


// use App\Controllers\Ad_cateController;
// use App\Controllers\Ad_ProductController;
// use App\Controllers\Ad_usersController;
// use App\Controllers\AdminController;
// use App\Controllers\CartController;
// use App\Controllers\HomeController;
// use App\Controllers\loginController;
// use App\Controllers\RegisterController;

if (isset($_GET['url'])) {
    $url = $_GET['url'];
} else {
    $url = "/";
}

routing($url);



// switch ($url) {
//     case 'home': {
//             $controller_ojb = new HomeController();
//             break;
//         }
//     case 'add_to_cart': {
//             $controller_ojb = new HomeController();
//             $controller_ojb->add_to_cart();
//             break;
//         }
//     case 'register': {
//             $controller_ojb = new RegisterController();
//             break;
//         }
//     case 'register/perform_register': {
//             $controller_ojb = new RegisterController();
//             $controller_ojb->perform_register();
//             break;
//         }
//     case 'login': {
//             $controller_ojb = new loginController();
//             break;
//         }
//     case 'login/perform_login': {
//             $controller_ojb = new loginController();
//             $controller_ojb->perform_login();
//             break;
//         }
//     case 'logout': {
//             session_destroy();
//             header('location:' . BASE_URL . 'login');
//             break;
//         }
//     case 'admin': {
//             $controller_ojb = new AdminController();
//             break;
//         }
//     case 'admin/users': {
//             $controller_ojb = new Ad_usersController();
//             if (isset($_POST['delete_user'])) {
//                 $controller_ojb->delete_user($_POST['delete_user']);
//             }
//             if (isset($_GET['update_user'])) {
//                 $controller_ojb->update_user($_GET['update_user']);
//                 if (isset($_POST['submit'])) {
//                     if (empty($_FILES['avt']['name'])) {
//                         $avt = $_POST['old_avt'];
//                     } else {
//                         $avt =  $_FILES['avt']['name'];
//                     }
//                     $user_ud = [
//                         'user_id' => $_POST['id'],
//                         'full_name' => $_POST['full_name'],
//                         'email' => $_POST['email'],
//                         'age' => $_POST['age'],
//                         'role' => $_POST['role'],
//                         'avt' => $avt
//                     ];
//                     $controller_ojb->confim_update($user_ud);
//                 }
//             }
//             break;
//         }
//     case 'admin/categories': {
//             $controller_ojb = new Ad_cateController();
//             if (isset($_POST['delete_cate'])) {
//                 $controller_ojb->delete_cate($_POST['delete_cate']);
//             }
//             if (isset($_GET['update_cate'])) {
//                 $controller_ojb->update_cate($_GET['update_cate']);
//                 if (isset($_POST['submit'])) {
//                     $user_ud = [
//                         'cate_id' => $_POST['id'],
//                         'cate_name' => $_POST['cate_name']
//                     ];
//                     $controller_ojb->confim_update($user_ud);
//                 }
//             }
//             if (isset($_GET['add_cate'])) {
//                 $controller_ojb->add_cate();
//                 if (isset($_POST['submit'])) {
//                     echo  $controller_ojb->comfim_add($_POST['cate_name']);
//                 }
//             }
//             break;
//         }
//     case 'admin/products': {
//             $controller_ojb = new Ad_ProductController();
//             if (isset($_POST['delete_pr'])) {
//                 $controller_ojb->delete_pr($_POST['delete_pr']);
//             }
//             if (isset($_GET['update_pr'])) {
//                 $controller_ojb->update_pr($_GET['update_pr']);
//                 if (isset($_POST['submit'])) {
//                     if (empty($_FILES['img']['name'])) {
//                         $img = $_POST['old_img'];
//                     } else {
//                         $img =  $_FILES['img']['name'];
//                     }
//                     $product_ud = [
//                         'product_id' => $_POST['id'],
//                         'product_name' => $_POST['product_name'],
//                         'price' => $_POST['price'],
//                         'image' => $img,
//                         'sale' => $_POST['sale'],
//                         'view' => $_POST['view'],
//                         'desc' => htmlspecialchars($_POST['desc'])
//                     ];
//                     $controller_ojb->confim_update($product_ud);
//                 }
//             }
//             break;
//         }
//     case 'cart': {
//             $controller_ojb = new CartController();
//             if (isset($_POST['delete_cart'])) {
//                 $controller_ojb->cart_delete($_POST['delete_cart']);
//             }
//             if (isset($_POST['buy_now'])) {
//                 $controller_ojb->buy_now($_POST['buy_now']);
//             }

//             break;
//         }
// }
