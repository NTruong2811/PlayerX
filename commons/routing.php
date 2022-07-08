<?php

use App\Controllers\Ad_cateController;
use App\Controllers\Ad_orderController;
use App\Controllers\Ad_ProductController;
use App\Controllers\Ad_usersController;
use App\Controllers\AdminController;
use App\Controllers\CartController;
use App\Controllers\HomeController;
use App\Controllers\loginController;
use App\Controllers\OrderController;
use App\Controllers\RegisterController;
use App\Controllers\Shop_Controller;
use App\Controllers\ShopController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

function routing($url)
{
    $router = new RouteCollector();


    $router->get('login', [loginController::class, 'index']);
    $router->post('login', [loginController::class, 'perform_login']);

    $router->get('register', [RegisterController::class, 'index']);
    $router->post('register', [RegisterController::class, 'perform_register']);

    $router->any('logout', function () {
        unset($_SESSION['user']);
        header('location: ' . BASE_URL . 'login');
    });

    $router->group(['prefix' => '/'], function ($router) {
        $router->get('/', [HomeController::class, 'index']);
        $router->group(['prefix' => 'admin'], function ($router) {
            $router->get('/', [AdminController::class, 'index']);
            $router->group(['prefix' => 'users'], function ($router) {
                $router->get('/', [Ad_usersController::class, 'index']);
                $router->get('delete/{id}', [Ad_usersController::class, 'delete_user']);
                $router->get('update/{id}', [Ad_usersController::class, 'update_user']);
                $router->post('update/{id}', [Ad_usersController::class, 'save_update']);
            });
            $router->group(['prefix' => 'categories'], function ($router) {
                $router->get('/', [Ad_cateController::class, 'index']);
                $router->get('add', [Ad_cateController::class, 'add_cate']);
                $router->post('add', [Ad_cateController::class, 'save_add']);
                $router->get('delete/{id}', [Ad_cateController::class, 'delete_cate']);
                $router->get('update/{id}', [Ad_cateController::class, 'update_cate']);
                $router->post('update/{id}', [Ad_cateController::class, 'save_update']);
            });
            $router->group(['prefix' => 'products'], function ($router) {
                $router->get('/', [Ad_ProductController::class, 'index']);
                $router->get('add', [Ad_ProductController::class, 'add_pr']);
                $router->post('add', [Ad_ProductController::class, 'save_add']);
                $router->get('delete/{id}', [Ad_ProductController::class, 'delete_pr']);
                $router->get('update/{id}', [Ad_ProductController::class, 'update_pr']);
                $router->post('update/{id}', [Ad_ProductController::class, 'save_update']);
            });
            $router->group(['prefix' => 'orders'], function ($router) {
                $router->get('/', [Ad_orderController::class, 'index']);
                $router->get('status/{id}', [Ad_orderController::class, 'check_status']);
            });
        });
        $router->group(['prefix' => 'cart'], function ($router) {
            $router->get('/', [CartController::class, 'index']);
            $router->get('add_to_cart/{id}', [CartController::class, 'add_to_cart']);
            $router->get('delete/{id}', [CartController::class, 'delete_cart']);
            $router->get('checkout', [CartController::class, 'checkout']);
        });
        $router->group(['prefix' => 'orders'], function ($router) {
            $router->post('/', [OrderController::class, 'order']);
            $router->get('my_orders', [OrderController::class, 'my_orders']);
            $router->get('my_orders/status/{id}', [OrderController::class, 'check_status']);
        });
        $router->group(['prefix' => 'shop'], function ($router) {
            $router->get('/', [Shop_Controller::class, 'index']);
            $router->post('/', [Shop_Controller::class, 'search']);
        });
    });

    $dispatcher = new Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    echo $response;
}
