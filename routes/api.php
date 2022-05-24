<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix('orders')->group(function () {
//    Route::get('/', function () {
//        echo 'All Orders';
//    });
//
//    Route::get('/{sort}', function ($sort) {
//        return "Orders sorted with {$sort}";
//    });
//
//    Route::post('/new', function () {
//        return true;
//    });
//});

Route::resources([
    'orders' => \App\Http\Controllers\OrderController::class,
]);
