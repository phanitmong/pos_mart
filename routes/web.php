<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\Stock_inController;
use App\Http\Controllers\POS\PosController;

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
Auth::routes();

Route::get('/',[DashboardController::class,'index'])->name('index');

// Route::group(['middleware' => ['auth']], function () {

Route::resource('user', UserController::class);
Route::resource('role', RoleController::class);
Route::get('role/detail/{id}',[RoleController::class,'detail'])->name('role.detail');
Route::post('role/save_permission',[RoleController::class,'save_permission']);
//product
Route::resource('product', ProductController::class)->except(['destroy']);
Route::get('product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
//Category
Route::resource('category', CategoryController::class)->except(['destroy']);
Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

//stock_in
Route::get('/stock_in',[Stock_inController::class,'index'])->name('stock_in.index');
Route::get('/stock_in/create',[Stock_inController::class,'create'])->name('stock_in.create');
Route::post('/stock_in/save',[Stock_inController::class,'save']);
Route::get('/stock-in/detail/{id}',[Stock_inController::class,'detail']);

Route::get('stock-in/delete/{id}', [Stock_inController::class,'delete']);
Route::get('stock-in/print/{id}', [Stock_inController::class,'print']);
Route::post('stock-in/master/save', [Stock_inController::class,'save_master']);
Route::get('stock-in/item/delete/{id}', [Stock_inController::class,'delete_item']);
Route::post('stock-in/item/save', [Stock_inController::class,'save_item']);



Route::get('pos',[PosController::class,'index'])->name('pos.index');
Route::post('pos/get',[PosController::class,'get'])->name('pos.get');
// });
