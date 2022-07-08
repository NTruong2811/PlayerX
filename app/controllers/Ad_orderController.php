<?php

namespace App\Controllers;

use App\Models\Categories;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Users;

class Ad_orderController
{

    public function index()
    {
        $order_list = Orders::join('users', 'users.user_id', '=', 'orders.user_id')
            ->get();
        return view("Ad_orderView", [
            'order_list' => $order_list
        ]);
    }
    public function check_status($id)
    {
        $check_status = Orders::find($id);
        $check_status->status = 1;
        $check_status->save();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
