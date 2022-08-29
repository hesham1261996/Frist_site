<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\ItemsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\OrderController as ControllersOrderController;
use App\Models\User;
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
//admin 
Route::get('/admin' ,[AdminHomeController::class , 'index'] )->name('dashboard');
Route::resource('/admin/admin', AdminController::class )->middleware('admin');
Route::resource('/admin/customers', UserController::class )->middleware('admin');
Route::resource('/admin/categories' , CategoriesController::class);
Route::resource('/admin/items' , ItemsController::class);
Route::resource('/admin/orders',  OrderController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
