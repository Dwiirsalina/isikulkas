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
            $table->increments('id');
            $table->string('nama_masakan')->nullable();
            $table->string('bahan_masakan',200)->nullable();
            $table->string('kat_masakan')->nullable();
            $table->string('cara_masakan',1000)->nullable();
            $table->string('alat_masakan',200)->nullable();
            $table->string('jumlah_bahan_masakan')->nullable();
            $table->string('satuan_bahan_masakan')->nullable();
            $table->string('ukuran_bahan_masakan')->nullable();
            $table->string('imageUrl')->nullable();
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
