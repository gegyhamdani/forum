<?php

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
            $table->increments('no');
            $table->string('member_id', 25)->index();
            $table->string('member_name', 40);
            $table->string('username', 16)->unique();
            $table->string('password', 16);
            $table->string('email', 30)->unique();
            $table->date('tgl_lahir');
            $table->string('jk', 10);
            $table->date('tgl_join');
            $table->integer('level')->length(1)->unsigned();;
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
        Schema::drop('users');
    }
}
