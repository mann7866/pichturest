<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(PagesController::class)->prefix('/pages')->name('pages.')->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');
    Route::get('/explore','explore')->name('explore');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(PostController::class)->prefix('/post')->name('posts.')->group(function(){
        Route::get('/made','made')->name('made');
        Route::get('/saved','saved')->name('saved');
        Route::get('/pich/{id_unik}', 'show')->name('show');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
    });

    Route::post('/comment',[CommentController::class,'store']);

});

require __DIR__.'/auth.php';
