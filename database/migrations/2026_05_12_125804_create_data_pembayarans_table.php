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
        Schema::create('data_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_calon_mahasiswa_id')->constrained();
            $table->string('namalengkap');
            $table->foreignId('data_fakultas_id')->constrained();
            $table->string('namafakultas');
            $table->foreignId('data_program_studi_id')->constrained();
            $table->string('namaprogramstudi');  
            $table->enum('status',['pending','lunas'])->default('pending');
            $table->integer('hargabayar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pembayarans');
    }
};
