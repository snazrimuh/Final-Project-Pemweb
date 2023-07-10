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
        Schema::create('ibu', function (Blueprint $table) {
            $table->bigInteger('nik_ibu');
            $table->bigInteger('kk');
            $table->string('nama_ibu', 50);
            $table->string('alamat_ibu', 100);
            $table->date('tgl_lahir_ibu');
            $table->integer('id_kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu');
    }
};
