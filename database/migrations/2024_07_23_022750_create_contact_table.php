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
        // contact merupakan nama tabel yang akan dibuat nanti
        Schema::create('contact', function (Blueprint $table) {
            // id() merupakan fungsi bawaan laravel, untuk membuat kolom id yang bersifat auto increment
            $table->id();
            // kolom name dengan tipe data varchar, dan panjang karakter 60
            $table->string('name', 60);
            // kolom phone dengan tipe data varchar, dan panjang karakter 14
            $table->string('phone', 14);
            // fungsi untuk membuat kolom created_at, dan updated_at
            // secara default laravel harus menyertakan timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // menghapus tabel contact
        // jika menjalankan php artisan migration:rollback
        Schema::dropIfExists('contact');
    }
};
