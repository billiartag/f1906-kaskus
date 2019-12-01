<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->mediumIncrements('id_post');
            $table->date('waktu_post');
            $table->text('isi_post');
            $table->integer('id_kategori_post');
            $table->integer('ctr_cendol');
            $table->integer('ctr_bata');
            $table->integer('reply_post');
            $table->integer('id_sumber');
            $table->string('user_poster');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
