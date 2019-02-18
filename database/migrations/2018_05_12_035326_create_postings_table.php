<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postings', function (Blueprint $table) {
            $table->increments('no');
            $table->string('posting_id', 25)->index();
            $table->string('subforum_id', 25);
            $table->string('member_id', 25);
            $table->date('tgl_buat');
            $table->text('judul');
            $table->text('isi');
            $table->integer('status')->length(1)->unsigned();
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
        Schema::drop('postings');
    }
}
