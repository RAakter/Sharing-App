<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function manage(){
        $customers = User::with('divisionName','districtName','areaName')->get();
        return view('backend.customer.index',compact('customers'));
    }
}
