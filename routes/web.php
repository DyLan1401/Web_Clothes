<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DanhMucSanPhamController;

Route::resource('danhmuc', DanhMucSanPhamController::class);

