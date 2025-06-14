<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile_user', function ($table) {
            $table->unsignedBigInteger('user_id'); // Kolom user_id untuk foreign key
            $table->string('nama_depan', 20)->nullable();
            $table->string('alamat', 50)->nullable();
            $table->string('telp', 14);
            $table->string('image')->nullable();
            $table->integer('following')->nullable();
            $table->integer('follower')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profile_user');
    }
};
