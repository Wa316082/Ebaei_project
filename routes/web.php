<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\StatusController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');


//============Auth Route Starts here =================

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){
    //==================Order Routes================


    Route::group(['prefix'=>'order'],function(){
        Route::get('/', [OrderController::class, 'index'])->name('order.view');
        Route::get('create', [OrderController::class, 'create']);
        Route::post('store', [OrderController::class, 'store']);


    });



    Route::group(['prefix'=>'status'], function(){
        Route::get('/', [StatusController::class, 'index'])->name('status.view');
        Route::post('store',[StatusController::class, 'store']);
        Route::get('edit/{id}', [StatusController::class, 'edit']);
        Route::post('update/{id}', [StatusController::class, 'update']);
        Route::get('delete/{id}', [StatusController::class, 'destroy']);


    });



});
