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
            $table->uuid('book_id')->primary();
            $table->uuid('book_category_id');
            $table->uuid('book_publisher_id');
            $table->uuid('book_shelf_id');
            $table->uuid('book_author_id');
            $table->string('book_name', 255)->nullable(false);
            $table->string('book_isbn', 16)->nullable(false);
            $table->integer('book_stock')->nullable(false);
            $table->string('book_description', 255)->nullable(false);
            $table->string('book_img', 255)->nullable(false);
            $table->timestamps();

            $table->foreign('book_author_id') 
                  ->references('author_id') 
                  ->on('authors') 
                  ->onDelete('cascade');
            
            $table->foreign('book_category_id') 
                  ->references('category_id') 
                  ->on('categories') 
                  ->onDelete('cascade');
            $table->foreign('book_publisher_id') 
                  ->references('publisher_id') 
                  ->on('publishers') 
                  ->onDelete('cascade');
            $table->foreign('book_shelf_id') 
                  ->references('shelf_id') 
                  ->on('shelfs') 
                  ->onDelete('cascade');
                  
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
