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
         Schema::create('postingan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu', 20);
            $table->json('bahan');
            $table->json('cara_membuat');
            $table->integer('id_user')->nullable();
            $table->integer('id_kategori')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingan');
    }
};
