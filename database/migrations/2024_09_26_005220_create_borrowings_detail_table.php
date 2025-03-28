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
        Schema::create('borrowings_detail', function (Blueprint $table) {
            $table->uuid('detail_id')->primary();
            $table->uuid('detail_book_id');
            $table->uuid('detail_borrowing_id');
            $table->integer('detail_quantity')->nullable(false);
            $table->timestamps();

            $table->foreign('detail_book_id') 
                  ->references('book_id') 
                  ->on('books') 
                  ->onDelete('cascade');
            $table->foreign('detail_borrowing_id') 
                  ->references('borrowing_id') 
                  ->on('borrowings') 
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings_detail');
    }
};
