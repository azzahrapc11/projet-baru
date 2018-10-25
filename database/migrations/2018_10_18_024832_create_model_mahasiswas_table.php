<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');//membuat kolom id auto increment
            $table->string('nama');//membuat kolom nama
            $table->string('email');//membuat kolom email
            $table->string('no hp');//membuat kolom nomor hp
            $table->string('username');//membuat kolom username
			$table->string('password');//membuat kolom password
			
            $table->text('alamat');//membuat kolom alamat dengan tipe text
            $table->timestamps();//membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_mahasiswas');
    }
}
