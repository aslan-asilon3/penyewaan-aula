<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('namaruangan');
            $table->enum('jenisruangan', ['Multifunction Hall', 'Ruang Rapat', 'Ruang Kelas']);;
            $table->string('ygmemberikan');
            $table->string('ygmenerima');
            $table->datetime('waktumulai');
            $table->datetime('waktuselesai');
            $table->enum('lainnya', ['laptop','catering']);
            $table->integer('jumlahlainnya');
            $table->integer('harga');
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
        Schema::dropIfExists('transaksis');
    }
}
