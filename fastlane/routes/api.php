<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BitcoinController;
use App\Http\Controllers\CardCategoriesController;
use App\Http\Controllers\CardSalesController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\CardSalesImageController;
use App\Models\CardCategory;

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

Route::get('health-check', function()
{
    return "Health 100%";
});


Route::prefix('card_rate_category')->group(function(){
    Route::controller(BankController::class)->group(function(){
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::post('/store', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
}); 

Route::prefix('card_rate')->group(function(){
    Route::controller(BankController::class)->group(function(){
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        Route::post('/store', 'store');
        Route::put('/{id}', 'update');
        Route::delete('/{id}', 'destroy');
    });
}); 