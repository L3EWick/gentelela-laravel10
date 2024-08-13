<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;    
use App\Http\Controllers\UserController;




Route::group(['middleware' => 'auth'], function () {
	
	Route::get ('/alterasenha',		[UserController::class, 'AlteraSenha']);
	Route::post('/salvasenha',   	[UserController::class, 'SalvarSenha']);

	Route::get('/home', 		[HomeController::class, 'index'])->name('home');
	Route::post('logout', 		[LoginController::class, 'logout'])->name('logout');




	Route::resource('user',UserController::class);


});
 
Route::get('/',  [LoginController::class, 'show'])->name('login');


Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');