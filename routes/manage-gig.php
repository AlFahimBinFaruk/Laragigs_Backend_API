<?php

use App\Http\Controllers\GigController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*****************************************************************************************************************
Public Routes
* *************** */
//Get All Gigs
Route::get("/",[GigController::class,'index']);







/********************************************************************************************
 Protected Routes only authorized user and the one who have created that Gig can access these routes
* *********************************** */
Route::group([
    'middleware' => 'api',
], function ($router) {
    //Get My Gigs
    Route::get('/get-my-gigs', [GigController::class,"getMyGigs"]);
    //Create New Gig
    Route::post('/', [GigController::class,"store"]);
    //Update Gig
    Route::put('/update/{id}', [GigController::class,"update"]);
    //Update Gig
    Route::delete('/destroy/{id}', [GigController::class,"destroy"]);

});