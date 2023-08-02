<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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



Route::get('/', [ArticleController::class, 'index'])->name('articles');
Route::get('/hello',function(){
    return 'hello world';
});
Route::get('/message',function(){
    return response()->json(['statut'=>200, 'message'=>'Message json']);
});

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('single');
Route::get('/reservation/{debut}/{fin}', function($debut,$fin){
    return 'date début :'.$debut.' | date fin : '.$fin;
});