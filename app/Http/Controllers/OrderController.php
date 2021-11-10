<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function dpOrderList(){
       $orders = Order::where('type', 'DP')->with('dpOrderlist')->get();
       return view('backend.order.dpindex',compact('orders'));
   }
   public function wpOrderList(){
       $orders = Order::where('type', 'WP')->with('wpOrderlist')->get();
       return view('backend.order.wpindex',compact('orders'));
   }
}
