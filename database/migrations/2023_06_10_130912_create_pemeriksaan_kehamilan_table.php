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
        Schema::create('pemeriksaan_kehamilan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kehamilan');
            $table->decimal('lingkar_perut', 5, 0);
            $table->decimal('tb_ibu', 5, 0);
            $table->decimal('bb_ibu', 5, 0);
            $table->integer('sistole');
            $table->integer('diastole');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_kehamilan');
    }
};
