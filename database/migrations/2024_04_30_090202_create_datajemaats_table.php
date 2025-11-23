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
        Schema::create('datajemaats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->date('tanggallahir');
            $table->string('sektor');
            $table->enum('jeniskelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat');
            $table->enum('statusbabtis', ['Sudah babtis', 'Belum babtis'])->nullable()->default('Belum babtis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datajemaats');
    }
};
