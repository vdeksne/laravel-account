<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [AccountController::class, 'index'])->name('index');
Route::view('/account', 'page.account')->name('account');
Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::post('/login', [AccountController::class, 'loginPost'])->name('login.post');
Route::post('/logout', [AccountController::class, 'logout'])->name('logout');

Route::get('/register', [AccountController::class, 'register'])->name('register');
Route::post('/register', [AccountController::class, 'registerPost'])->name('register.post');

Route::post('/submit-form', [AccountController::class, 'handleForm'])->name('form.submit');

Route::get('/success', [AccountController::class, 'success'])->name('success');

Route::get('/test-database', function () {
    return \App\Models\User::all();
});
