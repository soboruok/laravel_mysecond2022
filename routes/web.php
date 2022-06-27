<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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


/*
index - Show all listings
show - Show single listing.
create - Show form to create new listing
store - Store new listing
edit - Show form to edit listing
update - Update listing
destory - Delete listing
*/

//All List
Route::get('/', [ListingController::class, 'index']);



//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']); 

//Single Listing Data
///listings URL로 들어오면, ListingController의 store페이지로 이동한다.
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{id}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{id}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{id}', [ListingController::class, 'destroy']);

//Single List
Route::get('/listings/{id}', [ListingController::class, 'show']);


//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('users', [UserController::class,'store']);

//user logout
Route::post('/logout', [UserController::class,'logout']);

//Show login form
Route::get('/login', [UserController::class,'login']);

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']); 

