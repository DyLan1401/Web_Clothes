<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->integer('ma_giam_gia')->primary();
            $table->decimal('phan_tram_giam_gia', 10, 2);
            $table->enum('loai_giam_gia', ['percentage', 'fixed']);
            $table->decimal('gia_tri_don_hang_toi_thieu', 10, 2)->nullable();
            $table->integer('so_lan_su_dung_toi_da')->nullable();
            $table->integer('so_lan_da_su_dung')->default(0);
            $table->dateTime('ngay_het_han_giam_gia');
            $table->timestamp('ngay_tao')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};