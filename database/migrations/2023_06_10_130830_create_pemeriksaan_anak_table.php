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
        Schema::create('pemeriksaan_anak', function (Blueprint $table) {
            $table->increments('id_pemeriksaan_anak');
            $table->bigInteger('nik_anak');
            $table->integer('usia');
            $table->unsignedDecimal('tb_anak', 5, 0);
            $table->unsignedDecimal('bb_anak', 5, 0);
            $table->decimal('imt', 10, 0);
            $table->string('vitamin', 10);
            $table->string('status_tb', 10);
            $table->string('status_bb', 10);
            $table->integer('id_parameter');
            $table->string('status_stunting', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_anak');
    }
};