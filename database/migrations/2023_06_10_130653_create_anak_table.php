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
        Schema::create('anak', function (Blueprint $table) {
            $table->bigInteger('nik_anak');
            $table->bigInteger('kk');
            $table->string('nama_anak', 50);
            $table->string('alamat_anak', 100);
            $table->date('tgl_lahir_anak');
            $table->integer('id_kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
