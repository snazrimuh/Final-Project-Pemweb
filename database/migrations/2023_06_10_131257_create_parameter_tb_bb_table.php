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
        Schema::create('parameter_tb_bb', function (Blueprint $table) {
            $table->integer('id_parameter');
            $table->integer('id_administrator');
            $table->integer('umur')->nullable();
            $table->decimal('batas_bawah_tb', 10, 0)->nullable();
            $table->decimal('batas_atas_tb', 10, 0)->nullable();
            $table->decimal('batas_bawah_bb', 10, 0);
            $table->decimal('batas_atas_bb', 10, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameter_tb_bb');
    }
};
