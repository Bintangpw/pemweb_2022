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
        Schema::create('pengelola', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 200);
            $table->string('alamat', 200);
            $table->foreignId('id_pasar')->constrained('pasar');
            $table->string('foto');
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
        Schema::dropIfExists('pengelola');
    }
};
