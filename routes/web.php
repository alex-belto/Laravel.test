<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\TestController;

Route::get('/test/', [TestController::class, 'form']);
Route::post('/test/', [TestController::class, 'form']);
Route::get('/method/', [TestController::class, 'method']);

use App\Http\Controllers\PageController;

Route::get('/page/', [PageController::class, 'one'])->name('page');;
Route::post('/page/', [PageController::class, 'one'])->name('page');;

Route::get('/page/two/{num?}', [PageController::class, 'two'])->name('pagge');;
Route::post('/page/two/{num?}', [PageController::class, 'two'])->name('pagge');

use App\Http\Controllers\DataBaseController;

Route::get('/db/', [DataBaseController::class, 'data']);

use App\Http\Controllers\PostController;

Route::match(['GET', 'POST'],'/post/new/', [PostController::class, 'newPost']);
Route::match(['GET', 'POST'],'/post/edit/{id}', [PostController::class, 'editPost']);
Route::get('/users/', [UserController::class, 'getUsers']);
Route::get('/user/{id}/', [UserController::class, 'getUser']);
Route::get('/post/deleted/', [PostController::class, 'getDeletedPost']);
Route::get('/post/restore/{id}', [PostController::class, 'restorePost']);
Route::get('/post/del/{id}', [PostController::class, 'delPost']);
Route::get('/post/all/{order?}/{dire?}',[PostController::class, 'getAll'], function ($order, $dire) {
    //
})->where(['order' => 'date|title|id', 'dire' => 'desc|asc']);
Route::get('/post/{id}/', [PostController::class, 'getOne']);
Route::get('/categories/', [ProductController::class, 'getCategories']);
Route::get('/category/{id}', [ProductController::class, 'getCategory']);
Route::get('/events/', [ProductController::class, 'hasThrough']);
Route::get('/product/add/', [ProductController::class, 'test']);

use App\Http\Controllers\GuestBookController;

Route::match(['GET', 'POST'],'/wall/posts/', [GuestBookController::class, 'getPosts']);
Route::match(['GET', 'POST'],'/wall/edit/{id}', [GuestBookController::class, 'editPost']);
Route::get('/wall/moder/', [GuestBookController::class, 'moderation']);
Route::get('/wall/delete/{id}', [GuestBookController::class, 'deletePost']);

use App\Http\Controllers\BoardController;

Route::get('/board/', [BoardController::class, 'mainPage']);
Route::match(['GET', 'POST'],'/board/ads/{id}', [BoardController::class, 'adsPage']);

