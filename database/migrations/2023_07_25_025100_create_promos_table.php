<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->string('judul_promo');
            $table->string('deskripsi_promo');
            $table->date('tanggal_mulai_promo');
            $table->date('tanggal_akhir_promo');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE promos ADD gambar_promo LONGBLOB");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
