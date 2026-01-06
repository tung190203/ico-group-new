<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use UniSharp\LaravelFilemanager\Lfm;

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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    Lfm::routes();
});
Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/contact', [HomeController::class, 'contactPage'])->name('contact');
Route::get('/recruitment', [HomeController::class, 'recruitmentPage'])->name('recruitment');
Route::get('/introduction', [HomeController::class, 'introductionPage'])->name('introduction');
Route::get('/service', [HomeController::class, 'servicePage'])->name('service');
Route::get('/partner', [HomeController::class, 'partnerPage'])->name('partner');
Route::get('/post/{slug?}', [HomeController::class, 'postPage'])->name('post');

Route::prefix('admin')->group(function () {

    // ====== AUTH ROUTES (không cần đăng nhập) ======
    Route::prefix('auth')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])
            ->name('admin.login');

        Route::post('/login', [AuthController::class, 'processLogin'])
            ->name('admin.login.process');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('admin.logout');
    });
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'adminDashboard'])
            ->name('admin.dashboard');
        Route::get('/not-found', [AdminController::class, 'notFound'])->name('admin.not-found');
        Route::prefix('category')->name('admin.category.')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/', [CategoryController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('edit');
            Route::put('/{id}', [CategoryController::class, 'update'])->name('update');
            Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('partner')->name('admin.partner.')->group(function (){
            Route::get('/', [PartnerController::class, 'index'])->name('index');
            Route::get('/create', [PartnerController::class, 'create'])->name('create');
            Route::post('/', [PartnerController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [PartnerController::class, 'edit'])->name('edit');
            Route::put('/{id}', [PartnerController::class, 'update'])->name('update');
            Route::delete('/{id}', [PartnerController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('post')->name('admin.post.')->group(function (){
            Route::get('/', [PostController::class, 'index'])->name('index');
            Route::get('/create', [PostController::class, 'create'])->name('create');
            Route::post('/', [PostController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
            Route::put('/{id}', [PostController::class, 'update'])->name('update');
            Route::delete('/{id}', [PostController::class, 'destroy'])->name('destroy');
        });
        Route::prefix('menu')->name('admin.menu.')->group(function (){
            Route::get('/', [MenuController::class, 'index'])->name('index');
            Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('edit');
            Route::put('/{id}', [MenuController::class, 'update'])->name('update');
        });
    });
});
