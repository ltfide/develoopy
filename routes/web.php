<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Models\Category;
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


Route::get("/", [PostController::class, "index"]);
Route::get("/post/{post:slug}", [PostController::class, "post"]);

Route::get("/category", [CategoryController::class, "index"]);
Route::get("/category/{category:slug}", [CategoryController::class, "show"]);

// Route::get("/dashboard", [DashboardController::class, "index"]);
// Route::get("/dashboard/create", [DashboardController::class, "create"]);
// Route::post("/dashboard/create", [DashboardController::class, "store"]);
// Route::get("/dashboard/edit", [DashboardController::class, "edit"]);

Route::resource("/dashboard/posts", DashboardController::class);



