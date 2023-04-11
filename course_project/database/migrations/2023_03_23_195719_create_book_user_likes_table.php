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
        Schema::create('book_user_likes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->index('book_id', 'bul_book_idx');
            $table->index('user_id', 'bul_user_idx');

            $table->foreign('book_id', 'bul_book_fk')->on('books')->references('id');
            $table->foreign('user_id', 'bul_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_user_likes');
    }
};
