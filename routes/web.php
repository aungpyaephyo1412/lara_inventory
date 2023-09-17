<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name("home");
Route::controller(\App\Http\Controllers\InventoryController::class)
    ->prefix("inventory")
    ->group(function () {
        Route::get('/',"index")->name("inventory.index");
        Route::get('/create',"create")->name("inventory.create");
        Route::post('/',"store")->name("inventory.store");
        Route::get('{inventory}',"show")->name("inventory.show");
        Route::get('{inventory}/edit',"edit")->name("inventory.edit");
        Route::put('{inventory}',"update")->name("inventory.update");
        Route::delete('{inventory}',"delete")->name("inventory.delete");
    });

Route::resource("category",\App\Http\Controllers\CategoryController::class);
