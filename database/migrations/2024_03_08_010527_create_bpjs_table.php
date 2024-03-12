tabel bpjs
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
        Schema::create('bpjs', function (Blueprint $table) {
            $table->id();
            $table->string('no_bpjs');
            $table->string('norm');
            $table->string('nik_ktp');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->unsignedBigInteger('selected_poly_id')->nullable();
            $table->unsignedBigInteger('selected_dokter_id')->nullable();
            $table->timestamps();

            // Foreign keys will be added in the new migration
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpjs');
    }
};
