<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('user_id'); // user yang memberikan rating/review
            $table->integer('rating');
            $table->text('reviews'); 
            $table->integer('reviews_liked');
            $table->timestamps();

            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_ratings');
    }
};
