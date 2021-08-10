<?php

use App\Http\Controllers\ActivitySalesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransactionCustomerController;
use App\Http\Controllers\UserController;
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
    return view('auth/login');
});


Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::name('password.')->prefix('password')->group(function() {
    Route::get('request', [PasswordResetController::class, 'request'])->name('request');
    Route::get('reset', [PasswordResetController::class, 'reset'])->name('reset');
    Route::post('update_password', [PasswordResetController::class, 'update_password'])->name('update_password');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::name('user.')->prefix('user')->group(function() {
        Route::get('index', [UserController::class, 'index'])->name('index');
        Route::get('create', [UserController::class, 'create'])->name('create');
        Route::post('store', [UserController::class, 'store'])->name('store');
        Route::get('edit/{user:id}', [UserController::class, 'edit'])->name('edit');
        Route::patch('update/{user:id}', [UserController::class, 'update'])->name('update');
        Route::delete('destroy/{user:id}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::name('role.')->prefix('role')->group(function() {
        Route::get('index', [RoleController::class, 'index'])->name('index');
        Route::get('create', [RoleController::class, 'create'])->name('create');
        Route::post('store', [RoleController::class, 'store'])->name('store');
        Route::get('edit/{role:id}', [RoleController::class, 'edit'])->name('edit');
        Route::patch('update/{role:id}', [RoleController::class, 'update'])->name('update');
        Route::delete('destroy/{role:id}', [RoleController::class, 'destroy'])->name('destroy');
    });
    
    Route::name('product.')->prefix('product')->group(function() {
        Route::get('index', [ProductController::class, 'index'])->name('index');
        Route::get('create', [ProductController::class, 'create'])->name('create');
        Route::post('store', [ProductController::class, 'store'])->name('store');
        Route::get('edit/{product:code_product}', [ProductController::class, 'edit'])->name('edit');
        Route::patch('update/{product:code_product}', [ProductController::class, 'update'])->name('update');
        Route::delete('destroy/{product:code_product}', [ProductController::class, 'destroy'])->name('destroy');
    });
    
    Route::name('customer.')->prefix('customer')->group(function() {
        Route::get('index', [CustomerController::class, 'index'])->name('index');
        Route::get('create', [CustomerController::class, 'create'])->name('create');
        Route::post('store', [CustomerController::class, 'store'])->name('store');
        Route::get('edit/{customer:id}', [CustomerController::class, 'edit'])->name('edit');
        Route::patch('update/{customer:id}', [CustomerController::class, 'update'])->name('update');
        Route::delete('destroy/{customer:id}', [CustomerController::class, 'destroy'])->name('destroy');
    });
    
    Route::name('activity_sales.')->prefix('activity_sales')->group(function() {
        Route::get('index', [ActivitySalesController::class, 'index'])->name('index');
        Route::get('create', [ActivitySalesController::class, 'create'])->name('create');
        Route::post('store', [ActivitySalesController::class, 'store'])->name('store');
        Route::get('edit/{activity_sales:id}', [ActivitySalesController::class, 'edit'])->name('edit');
        Route::patch('update/{activity_sales:id}', [ActivitySalesController::class, 'update'])->name('update');
        Route::delete('destroy/{activity_sales:id}', [ActivitySalesController::class, 'destroy'])->name('destroy');
    });
    
    Route::name('transaction_customer.')->prefix('transaction_customer')->group(function() {
        Route::get('index', [TransactionCustomerController::class, 'index'])->name('index');
        Route::get('create', [TransactionCustomerController::class, 'create'])->name('create');
        Route::post('store', [TransactionCustomerController::class, 'store'])->name('store');
        Route::get('edit/{transaction_customer:id}', [TransactionCustomerController::class, 'edit'])->name('edit');
        Route::patch('update/{transaction_customer:id}', [TransactionCustomerController::class, 'update'])->name('update');
        Route::delete('destroy/{transaction_customer:id}', [TransactionCustomerController::class, 'destroy'])->name('destroy');
    });
});
