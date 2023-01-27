<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RatingController;
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
// All listings 
Route::get('/', [ListingController::class, 'index']);



//create form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


//store listing

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//edit listing

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//edit sub listing

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//delete sub listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');



//Single listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);


//register

Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//new usser 

Route::post('/users', [UserController::class, 'store']);

//logout

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// login form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login

Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//store listing

Route::post('/ratings/{listing}', [RatingController::class, 'store'])->middleware('auth');



