<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;

use App\Http\Controllers\Product_CategoryController;

Route::resource('danhmuc', Product_CategoryController::class);


// Route mặc định sẽ chuyển hướng về trang danh sách sản phẩm
Route::get('/', function () {
    return redirect()->route('sanpham.index');
});

// Route tạo mới sản phẩm
Route::get('sanpham/create', [SanPhamController::class, 'create'])->name('sanpham.create');

// Route xử lý tạo mới sản phẩm (POST)
Route::post('sanpham', [SanPhamController::class, 'store'])->name('sanpham.store');

// Route chỉnh sửa sản phẩm (GET)
Route::get('sanpham/{sanpham}/edit', [SanPhamController::class, 'edit'])->name('sanpham.edit');

// Route xử lý cập nhật sản phẩm (PUT/PATCH)
Route::put('sanpham/{sanpham}', [SanPhamController::class, 'update'])->name('sanpham.update');

// Route xóa sản phẩm
Route::delete('sanpham/{sanpham}', [SanPhamController::class, 'destroy'])->name('sanpham.destroy');

// Các route resource sẽ tự động tạo ra các route còn lại (index, show) cho resource 'sanpham'
Route::resource('sanpham', SanPhamController::class)->except([
    'create', 'store', 'edit', 'update', 'destroy'
]);