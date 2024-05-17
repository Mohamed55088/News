<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AnalyzingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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



Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function () {
        return view('welcome');
    });
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard/content', [BlogController::class, 'index'])->name('dashboard.content');
        Route::post('/dashboard/content', [BlogController::class, 'store'])->name('dashboard.content');
        Route::get('/dashboard/home', [AnalyzingController::class, 'index'])->name('dashboard.home');
        Route::get('/dashboard/team', [AdminController::class, 'index'])->name('dashboard.team');
        Route::post('/dashboard/team', [AdminController::class, 'store'])->name('dashboard.team');
        Route::get('/dashboard/calander', [AdminController::class, 'calander'])->name('dashboard.calander');



        Route::get('/dashboard/logout', [AdminLoginController::class, 'logout'])->name('dashboard.logout');
        Route::get('/dashboard', function () {
            return view('Dashboard.home');
        })->name('dashboard');
    });

    Route::middleware('guest:admin')->group(function () {
        Route::get('dashboard/login', [AdminLoginController::class, 'index'])->name('dashboard.login');
        Route::post('dashboard/login', [AdminLoginController::class, 'store'])->name('dashboard.login');

    });

    Route::get('/blogs', [BlogController::class, 'show'])->name('contents');
    Route::post('/blogs', [BlogController::class, 'show'])->name('contents');

    Route::get('/blog/{id}', [BlogController::class, 'showOne'])->name('content');
    Route::post('/comment', [CommentController::class, 'comment'])->name('comment');

    Route::get('/about', [BlogController::class, 'about'])->name('about');

    Route::get('/test', function () {
        return view('test');
    });


    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::post('/set-locale', 'App\Http\Controllers\LocaleController@setLocale')->name('set-locale');
    Route::get('/news', function () {
        return view('website.newsPage');
    });
    require __DIR__ . '/auth.php';
});


