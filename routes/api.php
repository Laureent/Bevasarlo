<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShoppingListController;

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
Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/shoppinglist',[ShoppingListController::class,'index']);
    Route::post('/shoppinglist',[ShoppingListController::class,'store'])->name('addItem');
    Route::post('/logout',[AuthController::class,'logout']);
});
