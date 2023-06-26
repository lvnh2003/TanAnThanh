<?php

use App\Http\Controllers\MainController;
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
    return view('index');
})->name('index');
Route::get('/gioi-thieu-tan-an-thanh',function(){
    return view('preview');
})->name('preview');
Route::get('/tuyen-dung-nhan-su',function(){
    return view('recruit');
})->name("recruit");
Route::get("lien-he",function(){
    return view('contact');
})->name('contact');
Route::get('/tin-tuc',[MainController::class,'news'])->name('news');
Route::get('/tin-tuc/{slug}',[MainController::class,'detail'])->name('detail');
Route::get('list',[MainController::class,'list'])->name('list');
Route::post('/new/{id}',[MainController::class,'destroy'])->name('destroy');
Route::get('/admin',function(){
    return view('admin.index');
});
Route::get('/post',function(){
    return view('admin.post');
})->name('post');
Route::post('/post',[MainController::class,'upload'])->name('store');