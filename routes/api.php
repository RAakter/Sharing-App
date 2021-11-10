<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//user login, register
Route::post('login', 'API\UserController@userlogin');
Route::post('register', 'API\UserController@userRegister');

//division
Route::get('get/division','API\DivisionController@getDivision');
Route::get('get/division/{id}','API\DivisionController@getDivisionById');

//district
Route::get('get/district','API\DistrictController@getDistrict');
Route::get('get/district/{id}','API\DistrictController@getDistrictById');

//area
Route::get('get/area','API\AreaController@getArea');
Route::get('get/area/{id}','API\AreaController@getAreaById');

//user-profile
Route::get('show/user/profile/{id}', 'API\UserController@show');
Route::post('edit/user/profile/{id}', 'API\UserController@edit');

//wastage product list
Route::get('get/wastage/product/list','API\WastageProductController@getWastage');
Route::get('get/wastage/product/by/{id}','API\WastageProductController@getWastageById');

//deals product list
Route::get('get/deals/product/list','API\DealsProductController@getDeals');
Route::get('get/deals/product/by/{id}','API\DealsProductController@getDealsById');

//promotional banner
Route::get('get/promotional/banner','API\BannerController@getBanner');
Route::get('get/promotional/banner/by/{id}','API\BannerController@getBannerById');

//shipping
Route::get('get/shipping','API\ShippingController@getShipping');
Route::get('get/shipping/by/{id}','API\ShippingController@getShippingById');

//deals product order
Route::post('deals/product/order','API\OrderController@placeOrderDP');
Route::get('deals/product/order/history/{id}','API\OrderHistoryController@getHistoryDP');

//cart
Route::post('add/cart','API\CartController@addCart');
//Route::post('edit/cart/{id}','API\CartController@editCart');
//Route::post('delete/cart/{id}','API\CartController@deleteCart');
Route::get('cart/list/{user_id}','API\CartController@cartList');


//wastage product order
Route::post('wastage/product/order','API\OrderController@placeOrderWP');
Route::get('wastage/product/order/history/{id}','API\OrderHistoryController@getHistoryWP');

//find people
Route::post('find/people/{id}/{lat}/{lon}/{from}/{to}','API\FindPeopleController@findPeople');
Route::post('check/request/{lat}/{lon}/{req_t_id}/{user_id}/{flag}','API\FindPeopleController@checkRequest');
Route::get('get/people/{id}','API\FindPeopleController@getPeople');
