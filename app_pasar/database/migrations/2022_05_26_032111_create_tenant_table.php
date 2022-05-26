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
        Schema::create('tenant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 200);
            $table->foreignId('id_pemilik')->constrained('pemilik');
            $table->string('latitude_tenant', 200);
            $table->string('longitude_tenant', 200);
            $table->string('harga_iuran', 200);
            $table->foreignId('id_pasar')->constrained('pasar');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('edited_by')->constrained('users');
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
        Schema::dropIfExists('tenant');
    }
};
