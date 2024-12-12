<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_colors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('product_photo_id');
            $table->string('color')->nullable();
            $table->string('stock')->nullable();
            $table->timestamps();

            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');

            $table->foreign('product_photo_id')
            ->references('id')
            ->on('product_photos')
            ->onDelete('cascade');
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('product_colors');
    }
};
