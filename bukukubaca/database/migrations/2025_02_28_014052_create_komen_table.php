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
        Schema::create('komen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
 
            $table->foreign('users_id')->references('id')->on('user');
            $table->unsignedBigInteger('bukus_id');
 
            $table->foreign('bukus_id')->references('id')->on('buku');
            $table->text("content");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komen');
    }
};
