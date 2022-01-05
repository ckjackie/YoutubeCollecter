<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VideoListController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;




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


Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/user',function(){
	$user = Auth::user();
	if ($user == NULL){
		return "未登入";
	} else {
		return $user;
	}
});


Route::get('/mylogout', function (Request $request){
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
});


Route::get('/', [VideoController::class, 'index']);

Route::middleware(['auth'])->group(function () {
//要驗證才能訪問的路由
	Route::get('/show/{id}/', [VideoController::class, 'show']);
	Route::post('/add', [VideoController::class, 'add']);
	Route::post('/addcom/{id}/', [VideoController::class, 'addcom']);
	Route::get('/delete/{id}/', [VideoController::class, 'delete']);
});

//Resource 可把對應的CRUD方法都建起來
Route::resource('videolist', VideoListController::class);
Route::get('/videolist/list/{id}/', [VideoListController::class, 'list']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
