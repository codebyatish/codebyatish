<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post');

Route::middleware('auth')->group(function(){
    Route::get('/admin', [AdminsController::class, 'index'])->name('admin.index');

    Route::get('/admin/posts', [PostController::class, 'index'])->name('post.index');
    Route::get('/admin/posts/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/admin/posts', [PostController::class, 'store'])->name('post.store');
    Route::get('/admin/posts/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::patch('/admin/posts/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/admin/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');


    Route::put('/admin/user/update/{user}', [UserController::class, 'update'])->name('user.profile.update');
    Route::delete('/admin/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/admin/users/create', [UserController::class, 'create'])->name('user.create');
});


Route::middleware(['auth','role:Admin'])->group(function () {
    Route::get('/admin/users', [UserController::class, 'index'])->name('user.index');
    Route::put('/admin/{user}/attach', [UserController::class, 'attach'])->name('user.role.attach');
    Route::put('/admin/{user}/detach', [UserController::class, 'detach'])->name('user.role.detach');

    Route::get('/admin/roles', [RoleController::class, 'index'])->name('role.index');
    Route::post('/admin/roles', [RoleController::class, 'store'])->name('role.store');
    Route::delete('/admin/roles/{role}', [RoleController::class, 'destroy'])->name('role.destroy');
    Route::get('/admin/roles/{role}', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('/admin/roles/{role}', [RoleController::class, 'update'])->name('role.update');
    Route::put('/admin/{role}/attach', [RoleController::class, 'attachPermission'])->name('role.permission.attach');
    Route::put('/admin/{role}/detach', [RoleController::class, 'detachPermission'])->name('role.permission.detach');

    Route::get('/admin/permissions', [PermissionController::class, 'index'])->name('permission.index');
    Route::post('/admin/permissions', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('/admin/permissions/{permission}', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::put('/admin/permissions/{permission}', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('/admin/permissions/{permission}', [PermissionController::class, 'destroy'])->name('permission.destroy');
});

Route::middleware('can:view,user')->group(function () {
    Route::get('/admin/user/profile/{user}', [UserController::class, 'show'])->name('user.profile.show');
});
