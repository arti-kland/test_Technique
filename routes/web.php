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

Route::get('/', function () {
    return view('welcome');
});
        ////Création de coupon/////
Route::get('/Coupon', 'CouponsController@coupon');
Route::post('/CouponCreate', 'CouponValueController@createCoupon');


        ////Edit un coupon/////
Route::post('/CouponEdit', 'CouponValueController@editCoupon');

        ////Tester un coupon/////
Route::post('/CouponTest', 'CouponValueController@testCoupon');
