<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\HtmlController;




Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/google','googleLogin')->name('auth.google');
Route::get('auth/google-callback','googleAuthenication')->name('auth.google-callback');
});

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('index');
})->name('index');

use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\Product_CategoryController;

// Route cho danh mục sản phẩm
Route::resource('danhmuc', Product_CategoryController::class);

// Route mặc định chuyển hướng về trang danh sách sản phẩm
Route::get('/', function () {

    return redirect()->route('sanpham.index');
    return view('viewproduct');

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

