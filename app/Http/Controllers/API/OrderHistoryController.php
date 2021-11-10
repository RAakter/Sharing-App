<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderHistoryCollection;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderHistoryController extends Controller
{
    public function getHistoryDP($id){
        $history = Order::where('customer_id',$id)->where('type', 'DP')->orderBy('id','desc')->get();
        return new OrderHistoryCollection($history);
    }
    public function getHistoryWP($id){
        $history = Order::where('customer_id',$id)->where('type', 'WP')->orderBy('id','desc')->get();
        return new OrderHistoryCollection($history);
    }
}
