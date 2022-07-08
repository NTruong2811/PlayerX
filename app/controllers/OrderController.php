<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Order_detail;
use App\Models\Orders;
use App\Models\Products;

class OrderController
{

    public function order()
    {
        $total = Cart::selectRaw('sum(products.price * cart.quantity) as total')
            ->where('user_id', $_SESSION['user']['user_id'])
            ->join('products', 'products.id_product', '=', 'cart.product_id')
            ->first();

        $new_order = new Orders();
        $new_order->user_id = $_SESSION['user']['user_id'];
        $new_order->cart_total = $total['total'];
        $new_order->address = $_POST['address'];
        date_default_timezone_set('Asia/Bangkok');
        $date = date('y/m/d h:i:s a', time());
        $new_order->date = $date;
        $new_order->phone = $_POST['phone'];
        $new_order->status = 0;
        $new_order->save();
        $get_id = Orders::where('user_id', $_SESSION['user']['user_id'])
            ->orderBy('id_order', 'desc')
            ->first();
        $order_list = Cart::where('user_id', $_SESSION['user']['user_id'])
            ->join('products', 'products.id_product', '=', 'cart.product_id')
            ->get();
        foreach ($order_list as $row) {
            $order_detail = new Order_detail();
            $order_detail->order_id = $get_id['id_order'];
            $order_detail->id_product = $row['id_product'];
            $order_detail->quantity = $row['quantity'];
            $order_detail->save();
        }
        return view("checkout_complete", []);
    }
    public function my_orders()
    {
        $my_order = Orders::where('user_id', $_SESSION['user']['user_id'])
            ->get();
        return view("user_order_view", [
            'my_order' => $my_order
        ]);
    }
    public function check_status($id)
    {
        $check_status = Orders::find($id);
        $check_status->status = 3;
        $check_status->save();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
