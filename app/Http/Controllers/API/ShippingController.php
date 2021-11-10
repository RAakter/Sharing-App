<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShippingCollection;
use App\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function getShipping(){
        $shipping= Shipping::where('status',1)->orderBy('id', 'desc')->get();
        return new ShippingCollection($shipping);
    }

    public function getShippingById($id){
        $shipping= Shipping::where('id',$id)->where('status',1)->get();
        return new ShippingCollection($shipping);
    }
}
