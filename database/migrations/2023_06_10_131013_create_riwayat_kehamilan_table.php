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
        Schema::create('riwayat_kehamilan', function (Blueprint $table) {
            $table->increments('id_kehamilan');
            $table->unsignedBigInteger('nik_ibu');
            $table->date('tgl_melahirkan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kehamilan');
    }
};
