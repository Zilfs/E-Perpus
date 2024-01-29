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
        Schema::create('kategori_buku_relasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('buku_id')->unsigned();
            $table->bigInteger('kategori_id')->unsigned();
            $table->timestamps();

            $table->foreign('buku_id')->references('id')->on('buku')->onDelete('cascade');
            $table->foreign('kategori_id')->references('id')->on('kategori_buku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_buku_relasi');
    }
};
