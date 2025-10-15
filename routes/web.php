<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Các route chính cho project Lab8
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// 🧩 Bài 4: Many-to-Many (Student - Course)
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// 👤 Bài 5: One-to-One (User - Profile)
Route::get('/users', [UserController::class, 'index'])->name('users.index');

// 🗂️ Bài 6A: One-to-Many (Category - Product)
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// 📦 Bài 6B + Bài 7: CRUD Products
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');       // Danh sách
    Route::get('/create', [ProductController::class, 'create'])->name('create'); // Form thêm
    Route::post('/', [ProductController::class, 'store'])->name('store');       // Lưu thêm
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit'); // Form sửa
    Route::put('/{product}', [ProductController::class, 'update'])->name('update');  // Lưu sửa
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy'); // Xóa
});
use App\Http\Controllers\QueryDemoController;

Route::get('/queries', [QueryDemoController::class, 'index'])->name('queries.index');
