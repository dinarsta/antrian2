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
        Schema::create('nama_poly_dokters', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('id_poly');
            $table->unsignedBigInteger('id_dokter');
            $table->string('jam_kerja');
            $table->string('shift');
            $table->timestamps();

            // Foreign keys
            $table->foreign('id_poly')->references('id')->on('polies')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_poly_dokters');
    }
};
