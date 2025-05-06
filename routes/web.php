<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamC;

// Route mặc định sẽ chuyển hướng về trang danh sách sản phẩm
Route::get('/', function () {
    return redirect()->route('sanpham.index');
});

// Route tạo mới sản phẩm
Route::get('sanpham/create', [SanPhamC::class, 'create'])->name('sanpham.create');

// Route xử lý tạo mới sản phẩm (POST)
Route::post('sanpham', [SanPhamC::class, 'store'])->name('sanpham.store');

// Route chỉnh sửa sản phẩm (GET)
Route::get('sanpham/{sanpham}/edit', [SanPhamC::class, 'edit'])->name('sanpham.edit');

// Route xử lý cập nhật sản phẩm (PUT/PATCH)
Route::put('sanpham/{sanpham}', [SanPhamC::class, 'update'])->name('sanpham.update');

// Route xóa sản phẩm
Route::delete('sanpham/{sanpham}', [SanPhamC::class, 'destroy'])->name('sanpham.destroy');

// Các route resource sẽ tự động tạo ra các route còn lại (index, show) cho resource 'sanpham'
Route::resource('sanpham', SanPhamC::class)->except([
    'create', 'store', 'edit', 'update', 'destroy'
]);