<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatapasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar');
            $table->string('nama_pasien');
            $table->string('email')->unique();
            // $table->string('password');
            $table->string('device_id');
            $table->longText('alamat');
            $table->string('jenis_kelamin');
            $table->string('phone');
            $table->string('usia');
            $table->integer('id_dokter')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('datapasien');
    }
}
