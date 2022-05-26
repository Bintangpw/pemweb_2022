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
        Schema::create('pemilik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 200);
            $table->string('alamat', 200);
            $table->string('nik', 200);
            $table->string('no_wa', 200)->nullable();
            $table->string('no_telp', 200)->nullable();
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
        Schema::dropIfExists('pemilik');
    }
};
