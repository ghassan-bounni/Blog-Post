<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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

Route::get('/', [postController::class, 'index'])->name('Home');

Route::get('/posts/{post:slug}', [postController::class, 'show']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy']);

//replace these routes with advanced Eloquent Query Constraints in the Post model

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         // 'posts' => $category->posts->load('category', 'author')
//         'posts' => $category->posts,
//         'categories' => Category::all(),
//         'currentCategory' => $category
//     ]);
// })->name('category');

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts.index', [
//         // 'posts' => $author->posts->load('category', 'author')
//         'posts' => $author->posts,

//     ]);
// });
