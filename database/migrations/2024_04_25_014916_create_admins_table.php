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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempatLahir')->nullable();
            $table->string('tanggalLahir')->nullable();
            $table->string('jenisKelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('noTelepon')->nullable();
            $table->string('foto')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
