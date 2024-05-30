<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sopir', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->string('nopol');
            $table->string('jenis_aplikasi')->default('Taxi Online');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sopir');
    }
};
