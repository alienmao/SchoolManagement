<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('society_id')->unique();
            $table->string('name');
            $table->text('introduction');
            $table->string('proprieter_name');
            $table->integer('proprieter_class');
            $table->integer('proprieter_grade');
            $table->integer('proprieter_qq');
            $table->text('achievements');
            $table->boolean('recruit');
            $table->string('email');
            $table->integer('stars');
            $table->integer('type');
            $table->timestamps();
            $table->boolean('confirmed');
            $table->integer('recruit_qq_group');
            $table->rememberToken();
            $table->string('password',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societies');
    }
}
