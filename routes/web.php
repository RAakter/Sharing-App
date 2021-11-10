<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', 'AdminController@index')->name('admin.login');
    Route::post('/login', 'AdminController@loginCheck')->name('admin.loginCheck');
    Route::get('/register', 'AdminController@adminRegister')->name('admin.register');
    Route::post('/save/register', 'AdminController@saveRegister')->name('save.register');

    //ajax-requests
    Route::get('/get/district', 'IndexController@getDistricts');
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('/logout', 'AdminController@adminLogout')->name('admin.logout');
//        Change password
        Route::get('/change/password', 'AdminController@adminChangePassword')->name('admin.change.password');
        Route::post('/save/change/password', 'AdminController@saveChangePassword')->name('save.change.password');

        //promotional banner
        Route::get('/add/promotional/banner', 'PromotionalBannerController@add')->name('add.promotional.banner');
        Route::post('/save/promotional/banner', 'PromotionalBannerController@save')->name('save.promotional.banner');
        Route::get('/manage/promotional/banner', 'PromotionalBannerController@manage')->name('manage.promotional.banner');
        Route::get('/edit/promotional/banner/{id}', 'PromotionalBannerController@edit')->name('edit.promotional.banner');
        Route::post('/update/promotional/banner', 'PromotionalBannerController@update')->name('update.promotional.banner');
        Route::post('/delete/promotional/banner', 'PromotionalBannerController@delete')->name('delete.promotional.banner');

        //deals product
        Route::get('/add/deal/product', 'ProductDealController@add')->name('add.deal.product');
        Route::post('/save/deal/product', 'ProductDealController@save')->name('save.deal.product');
        Route::get('/manage/deal/product', 'ProductDealController@manage')->name('manage.deal.product');
        Route::get('/edit/deal/product/{id}', 'ProductDealController@edit')->name('edit.deal.product');
        Route::post('/update/deal/product', 'ProductDealController@update')->name('update.deal.product');
        Route::post('/delete/deal/product', 'ProductDealController@delete')->name('delete.deal.product');

        //wastage product
        Route::get('/add/wastage/product', 'WastageProductController@add')->name('add.wastage.product');
        Route::post('/save/wastage/product', 'WastageProductController@save')->name('save.wastage.product');
        Route::get('/manage/wastage/product', 'WastageProductController@manage')->name('manage.wastage.product');
        Route::get('/edit/wastage/product/{id}', 'WastageProductController@edit')->name('edit.wastage.product');
        Route::post('/update/wastage/product', 'WastageProductController@update')->name('update.wastage.product');
        Route::post('/delete/wastage/product', 'WastageProductController@delete')->name('delete.wastage.product');

        //division
        Route::get('/division/add-division', ['uses' => 'DivisionController@index', 'as' => 'add-division']);
        Route::post('/division/new-division', ['uses' => 'DivisionController@create', 'as' => 'new-division']);
        Route::get('/division/manage-division', ['uses' => 'DivisionController@manage', 'as' => 'manage-division']);
        Route::get('/division/edit-division/{id}', ['uses' => 'DivisionController@edit', 'as' => 'edit-division']);
        Route::post('/division/update-division', ['uses' => 'DivisionController@update', 'as' => 'update-division']);
        Route::post('/division/delete-division', ['uses' => 'DivisionController@delete', 'as' => 'delete-division']);

        //district
        Route::get('/district/add-district', ['uses' => 'DistrictController@index', 'as' => 'add-district']);
        Route::post('/district/new-district', ['uses' => 'DistrictController@create', 'as' => 'new-district']);
        Route::get('/district/manage-district', ['uses' => 'DistrictController@manage', 'as' => 'manage-district']);
        Route::get('/district/edit-district/{id}', ['uses' => 'DistrictController@edit', 'as' => 'edit-district']);
        Route::post('/district/update-district', ['uses' => 'DistrictController@update', 'as' => 'update-district']);
        Route::post('/district/delete-district', ['uses' => 'DistrictController@delete', 'as' => 'delete-district']);

        //Area
        Route::get('/area/add-area', ['uses' => 'AreaController@index', 'as' => 'add-area']);
        Route::post('/area/new-area', ['uses' => 'AreaController@create', 'as' => 'new-area']);
        Route::get('/area/manage-area', ['uses' => 'AreaController@manage', 'as' => 'manage-area']);
        Route::get('/area/edit-area/{id}', ['uses' => 'AreaController@edit', 'as' => 'edit-area']);
        Route::post('/area/update-area', ['uses' => 'AreaController@update', 'as' => 'update-area']);
        Route::post('/area/delete-area', ['uses' => 'AreaController@delete', 'as' => 'delete-area']);

        //Shipping List
        Route::get('/shipping/add-shipping', ['uses' => 'ShippingController@index', 'as' => 'add-shipping']);
        Route::post('/shipping/new-shipping', ['uses' => 'ShippingController@create', 'as' => 'new-shipping']);
        Route::get('/shipping/manage-shipping', ['uses' => 'ShippingController@manage', 'as' => 'manage-shipping']);
        Route::get('/shipping/edit-shipping/{id}', ['uses' => 'ShippingController@edit', 'as' => 'edit-shipping']);
        Route::post('/shipping/update-shipping', ['uses' => 'ShippingController@update', 'as' => 'update-shipping']);
        Route::post('/shipping/delete-shipping', ['uses' => 'ShippingController@delete', 'as' => 'delete-shipping']);

        Route::get('/customer-list', ['uses' => 'CustomerController@manage', 'as' => 'customer-list']);
        Route::get('/deals-product-order-list', ['uses' => 'OrderController@dpOrderList', 'as' => 'deals-product-order-list']);
        Route::get('/wastage-product-order-list', ['uses' => 'OrderController@wpOrderList', 'as' => 'wastage-product-order-list']);

    });
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
