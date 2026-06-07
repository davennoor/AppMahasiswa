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
        Schema::create('data_calon_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nik')->unique();
            $table->string('namalengkap');
            $table->string('alamat');
            $table->enum('jeniskelamin',['laki-laki','perempuan']);
            $table->string('agama');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('nohp');
            $table->integer('lulusantahun');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_calon_mahasiswas');
    }
};
