<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('berat');
            $table->string('harga');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('data_sampah_id');
            $table->foreign('data_sampah_id')->references('id')->on('data_sampah')->onDelete('cascade');
            $table->unsignedBigInteger('user_anonym_id')->nullable();
            $table->foreign('user_anonym_id')->references('id')->on('users_anonyms')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
