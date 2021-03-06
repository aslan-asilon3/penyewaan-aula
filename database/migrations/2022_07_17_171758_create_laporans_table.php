<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('namaruangan');
            $table->enum('jenisruangan', ['Multifunction Hall', 'Ruang Rapat', 'Ruang Kelas']);;
            $table->string('keterangan')->nullable;
            $table->datetime('waktumulai');
            $table->datetime('waktuselesai');
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
        Schema::dropIfExists('laporans');
    }
}
