<?php

namespace App\Http\Controllers\API;

use App\District;
use App\Http\Controllers\Controller;
use App\Http\Resources\DistrictCollection;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    //
    public function getDistrict(){
        $district= District::where('district_status',1)->orderBy('id', 'desc')->get();
        return new DistrictCollection($district);
    }

    public function getDistrictById($id){
        $district=District::where('id',$id)->where('district_status',1)->get();
        return new DistrictCollection($district);
    }
}
