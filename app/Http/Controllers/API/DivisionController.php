<?php

namespace App\Http\Controllers\API;

use App\Division;
use App\Http\Controllers\Controller;
use App\Http\Resources\DivisionCollection;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    //
    public function getDivision(){
        $division=Division::where('division_status',1)->orderBy('id', 'desc')->get();
        return new DivisionCollection($division);
    }

    public function getDivisionById($id){
        $division=Division::where('id',$id)->where('division_status',1)->get();
        return new DivisionCollection($division);
    }
}
