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


Route::get('/login',[MainController::class,'login'])->name('login');
Route::post('/login',[MainController::class,'check'])->name('loginAction');
Route::middleware('AdminLogin')->group(function(){
    Route::get('/admin',function(){
        return view('admin.index');
    })->name('admin.index');
    Route::get('/post',function(){
        return view('admin.post');
    })->name('post');
    Route::post('/post',[MainController::class,'upload'])->name('store');
    Route::get('list',[MainController::class,'list'])->name('list');
    Route::delete('/new/{id}',[MainController::class,'destroy'])->name('destroy');
    Route::get('/logout',[MainController::class,'logout'])->name('logout');
    Route::get('/dustbin',[MainController::class,'bin'])->name('bin');
    Route::get('listBin',[MainController::class,'listBin'])->name('listBin');
    Route::post('moveBin/{id}',[MainController::class,'moveBin'])->name('moveBin');
    Route::post('/change/{id}',[MainController::class,'change'])->name('change');
    Route::delete('/deleteAll',[MainController::class,'removeAll'])->name('removeAll');
});
Route::get('/data',[MainController::class,'data'])->name('getAllNews');