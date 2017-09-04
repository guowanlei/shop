<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyorderlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myorderlists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('goods_id');
            $table->string('attrs');
            $table->integer('price');
            $table->tinyInteger('num');
            $table->string('title');
            $table->integer('orderid');
            $table->integer('userid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myorderlists');
    }
}
