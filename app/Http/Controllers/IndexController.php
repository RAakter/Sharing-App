<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    //get-districts
    public function getDistricts(Request $request){
        $id = $request->get('id');
        $districts = District::where('division_id', $id)->get();

        echo '<option selected disabled value="" >---Please Select District---</option>';
        foreach ($districts as $district){
            echo '<option value="'.$district->id.'">'.$district->district_title.'</option>';
        }
    }
}
