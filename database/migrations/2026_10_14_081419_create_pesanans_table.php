<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id()->bigInteger();
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade')->bigInteger();
            $table->string('nama_pelanggan');
            $table->integer('nomor_meja');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->string('status')->enum("diproses","selesai","dibatalkan");
            $table->timestamps(created_at, updated_at);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
