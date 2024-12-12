<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // id penjual atau seller
            $table->string('name'); 
            $table->text('description'); 
            $table->string('brand');
            $table->integer('stock')->default(1);
            $table->integer('sold')->default(0);
            $table->integer('liked')->default(0);
            $table->integer('rating')->default(0); // total rating
            $table->decimal('price');
            $table->decimal('fixed_price');
            $table->decimal('discount')->default(0);
            $table->string('discount_type');
            $table->string('availability')->default('In Stock');
            $table->timestamps();
        
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
        
    }
    
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
