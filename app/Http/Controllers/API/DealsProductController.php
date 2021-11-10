<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\DealsCollection;
use App\ProductDeal;
use Illuminate\Http\Request;

class DealsProductController extends Controller
{
    //
    public function getDeals(){
        $deals= ProductDeal::where('status',1)->orderBy('id', 'desc')->get();
        return new DealsCollection($deals);
    }

    public function getDealsById($id){
        $deals= ProductDeal::where('id',$id)->where('status',1)->get();
        return new DealsCollection($deals);
    }
}
