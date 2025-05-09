<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id(); // ID tự động
            $table->string('id_san_pham')->unique(); // ID sản phẩm
            $table->string('Ten_SP'); // Tên sản phẩm
            $table->string('MoTa_SP')->nullable(); // Mô tả sản phẩm (nullable)
            $table->decimal('Gia', 10, 2); // Giá sản phẩm
            $table->integer('SoLuong'); // Số lượng
            $table->string('MauSac')->nullable(); // Màu sắc (nullable)
            $table->string('KichThuoc')->nullable(); // Kích thước (nullable)
            $table->string('Loai_SP'); // Loại sản phẩm
            $table->string('Hinh_SP')->nullable(); // Hình ảnh (nullable)
            $table->timestamps(); // Thời gian tạo và cập nhật
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams'); // Xóa bảng khi rollback
    }
};
