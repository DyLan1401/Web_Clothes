<?php

<<<<<<< HEAD
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\ProfileUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DiscountController;
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
=======

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\HtmlController;




Route::controller(SocialiteController::class)->group(function () {
    Route::get('auth/{provider}/redirect', 'authProviderRedirect')->name('auth.redirection');
    Route::get('auth/{provider}/callback', 'socialAuthentication')->name('auth.callback');
});
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534

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
<<<<<<< HEAD
//Roles
Route::get('role', [RoleController::class, 'role'])->name('user.role');
//profile
Route::get('/profile/{id}', [ProfileUserController::class, 'show'])->name('profile.show');
//order
Route::get('/orders/user/{id}', [OrderController::class, 'ordersByUser'])->name('orders.byUser');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::prefix('discounts')->group(function () {
    Route::get('/', [DiscountController::class, 'index'])->name('discounts.index'); // Danh sách

    Route::get('/create', [DiscountController::class, 'create'])->name('discounts.create'); // Form tạo mới
    Route::post('/', [DiscountController::class, 'store'])->name('discounts.store'); // Lưu mới

   Route::get('/discounts/{discount_id}/edit', [DiscountController::class, 'edit'])->name('discounts.edit');
Route::put('/discounts/{discount_id}', [DiscountController::class, 'update'])->name('discounts.update');

    Route::delete('/{id}', [DiscountController::class, 'destroy'])->name('discounts.destroy'); // Xóa
});

Route::get('/', function () {
    return view('welcome');
});
=======

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

use App\Http\Controllers\DanhMucSanPhamController;

Route::resource('danhmuc', DanhMucSanPhamController::class);
//trang chủ index
Route::get('/', function () {
    return view('index');
})->name('index');

use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\Product_CategoryController;

// Route cho danh mục sản phẩm
Route::resource('danhmuc', Product_CategoryController::class);

// Route mặc định chuyển hướng về trang danh sách sản phẩm
Route::get('sanpham/index', function () {

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


>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
