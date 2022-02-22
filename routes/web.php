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


Route::get("/", [PostController::class, "index"])->name("home");
Route::get("/post/{post:slug}", [PostController::class, "post"])->name("post-show");
Route::get('/paginate-more-products-ajax', [PostController::class,'paginate_more_products_ajax'])->name('paginate-more-products-ajax');


Route::prefix("category")->group(function () {
    Route::get("/", [CategoryController::class, "index"])->name("all-category");
    Route::get("/programming", [CategoryController::class, "programming"])->name("category-programming");
    Route::get("/programming/{category:slug}", [CategoryController::class, "show"])->name("show-programming");
});

Route::resource("/dashboard/posts", DashboardController::class)->middleware("auth:sanctum");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect("/dashboard/posts");
})->name('dashboard');

