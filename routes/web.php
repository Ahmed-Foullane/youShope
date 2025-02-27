<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Protect client dashboard
Route::middleware(['auth', 'client'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Protect admin dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix("admin")->group(function () {
        Route::get("dashboard", [DashboardController::class, "index"])->name("admin.dashboard");
        Route::get("users", [DashboardController::class, "users"])->name("admin.users");
        Route::get("create-product", [ProductController::class, 'create'])->name("create.product");
        Route::post("store-product", [ProductController::class, 'store']);
        Route::get("product/{id}/edit", [ProductController::class, 'edit']);
        Route::put("update-product/{id}", [ProductController::class, 'update']);
        Route::get("product/{id}/delete", [ProductController::class, 'delete']);
        Route::get("user/{id}/delete", [DashboardController::class, 'delete']);
    });
});

require __DIR__.'/auth.php';

