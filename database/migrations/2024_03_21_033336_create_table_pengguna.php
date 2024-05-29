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
        Schema::create('datapengguna', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('namaaplikasi');
            $table->string('JenisLayanan');
            $table->string('IpApp');
            $table->string('platform');
            $table->text('kebutuhan', 10000)->nullable();
            $table->string('Jenis');
            $table->date('tanggalpermohonan');
            $table->date('Downtime')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapengguna');
    }
};
