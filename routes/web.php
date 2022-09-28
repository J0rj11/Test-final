<?php

use Illuminate\Support\Facades\Route;

# Add these to headers
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
 
// Route::get('product',['as'=>'product.index','uses'=>'ProductController@index']);
//Route::get("/route-name", [SiteController::class, "method_name"]);

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
    return view('landing');
});

Auth::routes();

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::resource('customer', CustomerController::class)->except(['index']);

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::resource('/product', ProductController::class)->except(['index']);

Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::resource('/category', CategoryController::class)->except(['index']);

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::resource('/supplier', SupplierController::class)->except(['index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/cashier', [App\Http\Controllers\CashierController::class, 'index'])->name('cashier');
Route::get('/balanceDetail', [App\Http\Controllers\BalanceDetailController::class, 'index'])->name('balanceDetail');
Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index'])->name('transaction');
Route::get('/balance', [App\Http\Controllers\BalanceController::class, 'index'])->name('balance');
Route::get('/delivery', [App\Http\Controllers\DeliveryController::class, 'index'])->name('delivery');
Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('report');
// Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservation');;
// Route::get('/inventory', [App\Http\Controllers\InventoryController::class, 'index'])->name('inventory');;


