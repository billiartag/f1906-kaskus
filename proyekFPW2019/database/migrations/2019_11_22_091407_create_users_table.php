<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('username')->primary('pusername');
            $table->string('password');
            $table->string('nama');
            $table->string('email');
            $table->string('nomor');
            $table->integer('jk_user');
            $table->date('tgl_lahir_user');
            $table->longText('bio_profil');
            $table->longText('alamat_user');
            $table->string('negara_user');
            $table->string('provinsi_user');
            $table->integer('ctr_post');
            $table->date('join_date');
            $table->string('jabatan_user');
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
