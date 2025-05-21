<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
       Schema::create('discounts', function (Blueprint $table) {
    $table->id('discount_id');
    $table->decimal('discount_percent', 10, 2);
    $table->string('discount_type', 10); // percentage | fixed
    $table->decimal('min_order_value', 10, 2)->nullable();
    $table->integer('usage_limit')->nullable();
    $table->integer('usage_count')->default(0);
    $table->dateTime('discount_expiry_date');
    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};