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
        Schema::create('m_group_tarif_tindakan', function (Blueprint $table) {
            $table->id();
            $table->string('g_tarif_tindakan_code');
            $table->string('nama_group_tarif_tindakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_group_tarif_tindakan');
    }
};
