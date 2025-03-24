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
        Schema::create('Userss', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->string('firstname', 150);
            $table->string('lastname',150);
            $table->string('username', 150);
            $table->string('email', 150);
            $table->string('password',150);
            $table->boolean('isadmin')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_users');
    }
};
