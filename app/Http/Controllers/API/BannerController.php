<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BannerCollection;
use App\PromotionalBanner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function getBanner(){
        $banners= PromotionalBanner::where('status',1)->orderBy('id', 'desc')->get();
        return new BannerCollection($banners);
    }

    public function getBannerById($id){
        $banners= PromotionalBanner::where('id',$id)->where('status',1)->get();
        return new BannerCollection($banners);
    }
}
