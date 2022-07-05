<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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
    return redirect('posts');
});
Route::prefix('posts')->group(function () {
    Route::get('/', [ArticleController::class, 'index']);
    Route::get('create', [ArticleController::class, 'create']);
    Route::get('{id}', [ArticleController::class, 'show']);
    Route::get('{id}/edit', [ArticleController::class, 'edit']);
    Route::post('store', [ArticleController::class, 'store']);
    Route::put('{id}/update', [ArticleController::class, 'update']);
    Route::delete('{id}/delete', [ArticleController::class, 'delete']);
});
