<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

//All List
Route::get('/listings', [ListingController::class, 'index']);



//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']); 

//Single Listing Data
///listings URL로 들어오면, ListingController의 store페이지로 이동한다.
Route::post('/listings', [ListingController::class, 'store']);


//Single List
Route::get('/listings/{id}', [ListingController::class, 'show']);



