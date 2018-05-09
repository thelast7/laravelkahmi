<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
			$table->string('jenis_kelamin');
			$table->string('nik');
			$table->string('no_hp');
			$table->date('tanggal_lahir')->nullable();
			$table->string('alamat');
			$table->string('kota')->nullable();
			$table->string('kecamatan')->nullable();
			$table->string('pekerjaan');
			$table->string('photo_diri')->nullable();
			$table->string('photo_ktp')->nullable();
            $table->string('photo_usaha')->nullable();
			$table->string('harapan');
			$table->string('role')->nullable();
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
        Schema::dropIfExists('users');
    }
}
