<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/paginate-more-content', [PostController::class,'paginate_more_content'])->name('paginate-more-content');

Route::get('/programming', [CategoryController::class, 'programming'])->name('show-programming');
Route::get('/math', [CategoryController::class, 'math'])->name('show-math');
Route::get('/english', [CategoryController::class, 'english'])->name('show-english');

Route::middleware(["auth:sanctum", "verified"])->prefix('dashboard')->group(function () {
    Route::resource("/posts", DashboardController::class);
    Route::resource("/categories", CategoriesController::class);
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect("/dashboard/posts");
})->name('dashboard');
