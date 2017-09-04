<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsCategorylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_categorylists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('labelcatname');
            $table->string('labeldescription');
            $table->integer('fathercategory_id');
            $table->enum('iscommond', [1, 0])->default(0);
            $table->enum('ishot', [1, 0])->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_categorylists');
    }
}
