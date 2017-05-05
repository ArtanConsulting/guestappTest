<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('days', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('week_days');
            $table->string('fleisch');
            $table->string('vegi');
            $table->string('wochenhit');
            $table->string('sallatteller');
            $table->string('gemischtersallatte');
            $table->string('suppe');
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
        Schema::drop('montag');
    }
}
