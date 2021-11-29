<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\Postscontroller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\FloorsController;
use App\Http\Controllers\EstablishmentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TypeController;




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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Pagescontroller::class,'index']);

Route::get('/', [BlogController::class,'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home',[HomeController::class, 'check']);

//Details

Route::resource('/details',DetailsController::class);

Route::get('/details/create',[DetailsController::class, 'create']);

// Floors
Route::get('/floors',[FloorsController::class, 'index']);

Route::get('/floors/create_floors',[FloorsController::class, 'create']);

// Establishment
Route::get('/establishment',[EstablishmentController::class, 'index']);

Route::get('/establishment/create_establishment',[EstablishmentController::class, 'create']);

// Gallery
Route::get('/gallery',[GalleryController::class, 'index']);

Route::get('/gallery/create_gallery',[GalleryController::class, 'create']);

//Type

Route::get('/type',[TypeController::class, 'index']);

//Logout

Route::get('logout', '\App\Http\Controllers\HomeController@logout');
