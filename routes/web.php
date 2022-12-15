<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\StatusController;
use App\Http\Controllers\Backend\MerchantController;
use App\Http\Controllers\Backend\AgentController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\StatusHistoryController;

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
    return view('auth.login');
});
// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


//============Auth Route Starts here =================

Route::group(['middleware'=>['auth'],'prefix'=>'admin'],function(){
    //==================Order Routes================


    Route::group(['prefix'=>'order'],function(){
        Route::get('/', [OrderController::class, 'index'])->name('order.view');
        Route::get('create', [OrderController::class, 'create']);
        Route::post('store', [OrderController::class, 'store']);
        Route::get('tracking', [OrderController::class ,'tracking']);
        Route::get('tracking.search' ,[OrderController::class, 'tracking_search']);
        Route::get('track/{id}' ,[OrderController::class, 'track']);
        Route::get('reports' ,[OrderController::class, 'reports']);
        Route::get('reports.download' ,[OrderController::class, 'download']);


    });


    //===============Status Routes============

    Route::group(['prefix'=>'status'], function(){
        Route::get('/', [StatusController::class, 'index'])->name('status.view');
        Route::post('store',[StatusController::class, 'store']);
        Route::get('edit/{id}', [StatusController::class, 'edit']);
        Route::post('update/{id}', [StatusController::class, 'update']);
        Route::get('delete/{id}', [StatusController::class, 'destroy']);


    });


    //=============Location Routes=====================

    Route::group(['prefix'=>'location'],function(){
        Route::get('/',[LocationController::class,'create']);
        Route::get('zone_get/{id}',[LocationController::class,'zone_get']);
        Route::get('area_get/{id}',[LocationController::class,'area_get']);
        Route::post('store',[LocationController::class, 'store']);

    });

//    ================merchant routes========================



    Route::group(['prefix'=>'merchant'], function(){
        Route::get('/', [MerchantController::class, 'index'])->name('merchants.view');
        Route::post('store',[MerchantController::class, 'store']);


    });

    Route::group(['prefix'=>'agent'], function(){
        Route::get('/', [AgentController::class, 'index'])->name('agents.view');
        Route::post('store',[AgentController::class, 'store']);


    });



//    ============service routes==================

    Route::group(['prefix'=>'service'], function(){
        Route::get('/', [ServiceController::class, 'index'])->name('services.view');
        //Route::post('store',[MerchantController::class, 'store']);


    });

    // ============== Status History related Routes==========


    Route::group(['prefix'=>'status.histroy'],function (){
        Route::post('/', [StatusHistoryController::class ,'store']);

    });




});
