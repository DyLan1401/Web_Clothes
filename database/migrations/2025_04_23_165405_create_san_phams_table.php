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
        $table->string('id_san_pham')->unique();
        $table->string('Ten_SP');
        $table->string('MoTa_SP')->nullable();
        $table->decimal('Gia', 10, 2);
        $table->integer('SoLuong');
        $table->string('MauSac')->nullable();
        $table->string('KichThuoc')->nullable();
        $table->string('Loai_SP');
        $table->string('Hinh_SP')->nullable();
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
