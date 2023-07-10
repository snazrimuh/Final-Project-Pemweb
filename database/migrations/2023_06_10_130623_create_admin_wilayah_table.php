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
        Schema::create('admin_wilayah', function (Blueprint $table) {
            $table->increments('id_admin_wilayah');
            $table->string('username', 20);
            $table->string('email', 20);
            $table->string('password', 20);
            $table->integer('id_kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_wilayah');
    }
};
