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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('profession')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('profile_background')->nullable();
            $table->string('projects')->nullable();
            $table->string('success_rate')->nullable();
            $table->string('earning')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('website')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthday')->nullable();
            $table->string('phone')->nullable();
            $table->string('experience')->nullable();
            $table->string('skills')->nullable();
            $table->text('personal_bio')->nullable();
            $table->string('user_access')->nullable();
            $table->string('user_preferences')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
