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
        Schema::create('m_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('umur');
            $table->string('birth_date');
            $table->unsignedBigInteger('nik');
            $table->string('status_pernikahan');
            $table->string('pekerjaan');
            $table->foreignId('payment_id')->constrained('payment_methods');
            $table->integer('no_bpjs_asuransi');
            $table->string('upload_foto');
            $table->string('note');
            $table->string('phone_number');
            $table->foreignId('province_id')->constrained('provinces');
            $table->foreignId('cities_id')->constrained('cities');
            $table->foreignId('kecamatan_id')->constrained('kecamatans');
            $table->foreignId('kelurahan_id')->constrained('kelurahans');
            $table->string('address');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('kondisi_khusus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pasien');
    }
};
