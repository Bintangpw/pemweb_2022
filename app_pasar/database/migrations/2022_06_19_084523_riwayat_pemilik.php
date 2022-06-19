<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pemilik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_tenant')->constrained('tenant');
            $table->date('tgl_transaksi');
            $table->foreignId('id_pemilik_lama')->constrained('pemilik');
            $table->foreignId('id_pemilik_baru')->constrained('pemilik');
            $table->foreignId('created_by')->constrained('users')->nullable();
            $table->foreignId('edited_by')->constrained('users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_pemilik');
    }
};
