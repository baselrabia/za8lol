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
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('phone', 20)->nullable();
            $table->string('role', 20)->default('user');
            $table->string('gender', 20)->default('female');
            $table->string('location', 60);
            $table->integer('salary')->unsigned()->nullable();
            $table->text('biography')->nullable();

            $table->string('avatar')->default('/images/default-profile.jpg');

            $table->string('verify_link', 100)->nullable();
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
