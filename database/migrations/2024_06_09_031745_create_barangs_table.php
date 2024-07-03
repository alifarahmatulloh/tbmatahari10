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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->integer('kategori_id');
            $table->integer('supplier_id');
            $table->string('kode_barang');
            $table->string('stok_barang')->nullable();
            $table->string('foto_barang')->nullable();
            $table->string('harga_ecer')->nullable();
            $table->string('harga_grosir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
