<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\ProdCategoryController;

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
  return view('index');
/*  return view('welcome');*/
});

Route::get('/sidebar', function () {
/*    return view('index');*/
  return view('sidebar');
});



/*Route::resource('/prodpage', ProductController::class);*/
/*Route::get('/home', [ProdController::class, 'index']);
Route::get('/home', [ProdController::class, 'view']);*/
/*Route::resource('/', 'ProdController');*/

/*
Route::resource('/home', ProdController::class);*/

Route::resource('/prod', ProductController::class);

/*Route::get('prcatcreate', [ProdCategoryController::class, 'create']);*/
Route::resource('/catcreate', ProdCategoryController::class);
