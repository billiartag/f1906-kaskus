<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_posts', function (Blueprint $table) {
            $table->mediumIncrements('id_thread');
            $table->date('waktu_post_thread');
            $table->integer('ctr_reply');
            $table->integer('ctr_viewers');
            $table->integer('id_kategori_thread');
            $table->string('thread_locked');
            $table->string('judul_thread');
            $table->string('user_poster');
            $table->integer('ctr_cendol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread_posts');
    }
}
