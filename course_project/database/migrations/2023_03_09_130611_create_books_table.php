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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short');
            $table->string('image')->nullable();
            
            $table->unsignedBigInteger('author_id')->nullable();
            $table->index('author_id', 'book_author_idx');
            $table->foreign('author_id', 'book_author_fk')->on('authors')->references('id');

            $table->unsignedBigInteger('genre_id');
            $table->index('genre_id', 'book_genre_idx');
            $table->foreign('genre_id', 'book_genre_fk')->on('genres')->references('id');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
