<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    public $tablename = 'resep';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablename, function (Blueprint $table) {
            $table->uuid('id');
            $table->string('nama_masakan')->nullable();
            $table->string('bahan_masakan')->nullable();
            $table->string('kat_masakan')->nullable();
            $table->string('cara_masakan')->nullable();
            $table->string('alat_masakan')->nullable();
            $table->string('jumlah_bahan_masakan')->nullable();
            $table->string('satuan_bahan_masakan')->nullable();
            $table->string('ukuran_bahan_masakan')->nullable();
            $table->char('rating')->nullable();
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
        Schema::dropIfExists($this->tablename);
    }
}
