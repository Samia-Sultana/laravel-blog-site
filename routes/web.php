<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');
Route::get('/post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post'); ///post/{post} here {post} is the name of the class

Route::middleware('auth')->group(function(){
    Route::get('/admin', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');
    Route::get('/admin/posts/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');//'create' is name of the method and name('') is the route
    Route::post('/admin/posts', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');//'create' is name of the method and name('') is the route
    Route::get('/admin/posts', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/admin/users/{user}/profile', [App\Http\Controllers\UserController::class, 'show'])->name('user.profile.show');
    Route::put('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.profile.update');
   
});