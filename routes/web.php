<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('admin/provider','ProviderController')->names('admin.provider');

Route::resource('admin/section','SectionController')->names('admin.section');

Route::resource('admin/category','CategoryController')->names('admin.category');

Route::resource('admin/client','ClientController')->names('admin.client');

Route::resource('admin/product','ProductController')->names('admin.product');

Route::resource('admin/purchase','PurchaseController')->names('admin.purchase');

Route::resource('admin/venta','VentaController')->names('admin.venta');


Route::get('/admin', function () {

	return view('main');

})->name('admin.main');
