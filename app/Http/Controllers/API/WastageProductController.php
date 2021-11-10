<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\WastageCollection;
use App\WastageProduct;
use Illuminate\Http\Request;

class WastageProductController extends Controller
{
    //
    public function getWastage(){
        $wastage= WastageProduct::where('status',1)->orderBy('id', 'desc')->get();
        return new WastageCollection($wastage);
    }

    public function getWastageById($id){
        $wastage= WastageProduct::where('id',$id)->where('status',1)->get();
        return new WastageCollection($wastage);
    }
}
