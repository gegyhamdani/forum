<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailpostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailpostings', function (Blueprint $table) {
            $table->increments('no');
            $table->string('detailposting_id', 25)->index();
            $table->string('posting_id', 25);
            $table->string('tags_id', 25);
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
        Schema::drop('detailpostings');
    }
}
