<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

    Route::get('/role-register',[ App\Http\Controllers\Admin\Dashboardcontroller::class,'registered']);
    Route::get('/role-edit/{id}',[ App\Http\Controllers\Admin\Dashboardcontroller::class,'registeredit']);
    Route::put('/role-register-update/{id}',[ App\Http\Controllers\Admin\Dashboardcontroller::class,'registerupdate']);
    Route::delete('/role-delete/{id}' ,[App\Http\Controllers\Admin\Dashboardcontroller::class,'registerdelete']);

    Route::get('/books',[App\Http\Controllers\Admin\bookscontroller::class,'index']);
    Route::post('/save-books',[App\Http\Controllers\Admin\bookscontroller::class,'store']);
    Route::get('/edit-books/{id}',[App\Http\Controllers\Admin\bookscontroller::class,'edit']);
    Route::put('/books-update/{id}',[App\Http\Controllers\Admin\bookscontroller::class,'update']);
    Route::delete('/edit-books-delete/{id}',[App\Http\Controllers\Admin\bookscontroller::class,'delete']);
    



});






