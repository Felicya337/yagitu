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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('judul'); // Kolom untuk judul berita
            $table->text('konten'); // Kolom untuk isi berita
            $table->string('gambar')->nullable(); // Kolom untuk gambar berita
            $table->date('tanggal_mulai')->nullable(); // Kolom untuk tanggal mulai berlaku
            $table->date('tanggal_selesai')->nullable(); // Kolom untuk tanggal selesai berlaku
            $table->timestamps(); // Created At & Updated At
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
