<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/',[AppController::class,'index']);

//Route with parameter
Route::get('/about/{parameter}',[AppController::class,'about']);

//Route with optional parameter
Route::get('/services/{service?}', function () {
    return "<h1>Hello From Services </h1>";
});


//Named Routing
Route::get('/contact',[AppController::class, 'contact'])->name('contact');