<?php

namespace App\Http\Controllers\API;

use App\Area;
use App\Http\Controllers\Controller;
use App\Http\Resources\AreaCollection;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    //
    public function getArea(){
        $area= Area::where('status',1)->orderBy('id', 'desc')->get();
        return new AreaCollection($area);
    }

    public function getAreaById($id){
        $area=Area::where('id',$id)->where('status',1)->get();
        return new AreaCollection($area);
    }
}
