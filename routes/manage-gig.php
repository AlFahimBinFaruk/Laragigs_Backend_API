<?php

use App\Http\Controllers\GigController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*****************************************************************************************************************
Public Routes
* *************** */

Route::get("/",[GigController::class,'index']);







/********************************************************************************************
 Protected Routes
* *********************************** */
Route::group([
    'middleware' => 'api',
], function ($router) {
     //Create New Gig
     Route::post('/', [GigController::class,"store"]);

});