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
            $table->string('id_san_pham', 11)->primary();
            $table->string('Ten_SP', 225);
            $table->string('MoTa_SP', 225);
            $table->float('Gia');
            $table->float('SoLuong');
            $table->string('MauSac', 255)->nullable();
            $table->string('KichThuoc', 255)->nullable();
            $table->string('Loai_SP', 255);
            $table->string('Hinh_SP', 255);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
