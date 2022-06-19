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
        Schema::create('riwayat_iuran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_tenant')->constrained('tenant');
            $table->string('tahun_bulan');
            $table->string('jml_bayar', 200);
            $table->date('tgl_bayar');
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
        Schema::dropIfExists('riwayat_iuran');
    }
};
