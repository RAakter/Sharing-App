<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrderDP(Request $request){

        $order=new Order();
        $order->order_id        = mt_rand(10000000, 99999999);
        $order->customer_id     = $request->customer_id;
        $order->product_id      = $request->product_id;
        $order->qty             = $request->qty;
        $order->price           = $request->price;
        $order->discount_price  = $request->discount_price;
        $order->is_discount     = $request->is_discount;
        $order->subtotal        = $request->subtotal;
        $order->total           = $request->total;
        $order->shipping_id     = $request->shipping_id;
        $order->status          = 'pending';
        $order->payment_status  = 'unpaid';
        $order->type            = 'DP';
        $order->save();

        return new OrderResource($order);
    }

    public function placeOrderWP(Request $request){

        $order=new Order();
        $order->order_id        = mt_rand(10000000, 99999999);
        $order->customer_id     = $request->customer_id;
        $order->product_id      = $request->product_id;
        $order->qty             = $request->qty;
        $order->price           = $request->price;
        $order->discount_price  = $request->discount_price;
        $order->is_discount     = $request->is_discount;
        $order->subtotal        = $request->subtotal;
        $order->total           = $request->total;
        $order->shipping_id     = $request->shipping_id;
        $order->status          = 'pending';
        $order->payment_status  = 'unpaid';
        $order->type            = 'WP';
        $order->save();

        return new OrderResource($order);
    }
}
