<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('day_id')->unsigned()->index();
            $table->date('orderDate');
            $table->string('o_fleisch');
            $table->integer('nr_fleisch');
            $table->string('o_vegi');
            $table->integer('nr_vegi');
            $table->string('o_wochenhit');
            $table->integer('nr_wochenhit');
            $table->string('o_sallatteller');
            $table->integer('nr_sallatteller');
            $table->string('o_gemischtersallatte');
            $table->integer('nr_gemischtersallatte');
            $table->string('o_suppe');
            $table->integer('nr_suppe');
            $table->integer('day');
            $table->tinyInteger('done');
            $table->text('comments');
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
        Schema::drop('orders');
    }
}
