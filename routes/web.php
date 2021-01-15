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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/** Main Routes */

Route::get('/product/show','ProductController@index');
Route::get('/product/category/{category}','ProductController@category');
Route::get('/product/{product}','ProductController@detail');

Route::get('/cart/view', 'CartController@index');
Route::get('/cart/{prod}','CartController@store');
Route::get('/cart/update/{item}','CartController@update');
Route::get('/cart/delete/{item}', 'CartController@destroy');
Route::post('/cart/purchase', 'CartController@purchase');

Route::post('/comment', 'CommentController@store');

Route::get('/purchase/checkout', 'PaymentController@create');
Route::post('/purchase', 'PaymentController@store');

//Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::post('/user/promote', 'AdminController@promote');
    Route::post('/category', 'CategoryController@add');
    Route::get('/category/create', 'CategoryController@create');
    Route::get('/category/list', 'CategoryController@list');

    Route::get('/product/delete/{prod}', 'ProductController@destroy');
    Route::get('/product/edit/{prod}', 'ProductController@edit');
    Route::patch('/product/update/{prod}', 'ProductController@update');
    Route::get('/product/create/create', 'ProductController@create');
    Route::post('/product','ProductController@store');

    Route::get('/receipt/{receipt}', 'ReceiptController@index');
    Route::get('/receipt/update/{receipt}', 'ReceiptController@update');
    Route::get('/receipt/cancel/{receipt}', 'ReceiptController@cancel');
    
    Route::get('/manager', 'AdminController@index');
    Route::get('/manager/managecategory', 'AdminController@managecategory');
    Route::get('/manager/manageaccount', 'AdminController@manageuser');
    Route::get('/manager/manageproduct', 'AdminController@manageproduct');
    Route::get('/manager/managereceipt', 'AdminController@managereceipt');

    Route::get('/manager/code', 'AdminController@managecode');
    Route::get('/admin/create/code', 'AdminController@addcode');
    Route::post('/admin/store/code', 'AdminController@storecode');
    Route::get('/admin/delete/code/{code}', 'AdminController@deletecode');


});









