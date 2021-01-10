<?php

use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\StatusesController;

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

Route::get('/', [StaticPagesController::class, 'home'])->name('home');
Route::get('/help', [StaticPagesController::class, 'help'])->name('help');
Route::get('/about', [StaticPagesController::class, 'about'])->name('about');

Route::get('signup', [UsersController::class, 'create'])->name('signup');
Route::resource('users', UsersController::class);

Route::get('login', [SessionsController::class, 'create'])->name('login');
Route::post('login', [SessionsController::class, 'store'])->name('login');
Route::delete('logout', [SessionsController::class, 'destroy'])->name('logout');

Route::get('signup/confirm/{token}', [UsersController::class, 'confirmEmail'])->name('confirm_email');

Route::get('password/reset', [PasswordController::class, 'showLinkRequestForm'])->name('password.request'); // 填寫 Email 的表單
Route::post('password/email', [PasswordController::class, 'sendResetLinkEmail'])->name('password.email');    // 處理表單提交，成功的話就寄送信件，附帶 Token 的鏈結

Route::get('password/reset/{token}', [PasswordController::class, 'showResetForm'])->name('password.reset'); // 顯示更新密碼的表單，包含 Token
Route::post('password/reset', [PasswordController::class, 'reset'])->name('password.update');               // 對提交過來的 Token 和 Email 資料進行配對，正確的話更新密碼

Route::resource('statuses', StatusesController::class, ['only' => ['store', 'destroy']]);

Route::get('users/{user}/followings', [UsersController::class, 'followings'])->name('users.followings');
Route::get('users/{user}/followers', [UsersController::class, 'followers'])->name('users.followers');
