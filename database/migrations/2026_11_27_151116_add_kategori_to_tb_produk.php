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
        Schema::table('tb_produk', function (Blueprint $table) {
            $table->string('kategori', 100)->after('deskripsi');
            $table->enum('jenis', ['Penjualan', 'Penyewaan'])->default('Penjualan')->after('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_produk', function (Blueprint $table) {
            //
        });
    }
};
