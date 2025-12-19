<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/contact', [HomeController::class, 'contactPage'])->name('contact');
Route::get('/recruitment', [HomeController::class, 'recruitmentPage'])->name('recruitment');
Route::get('/introduction', [HomeController::class, 'introductionPage'])->name('introduction');
Route::get('/service', [HomeController::class, 'servicePage'])->name('service');
Route::get('/partner', [HomeController::class, 'partnerPage'])->name('partner');
Route::get('/post', [HomeController::class, 'postPage'])->name('post');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
});