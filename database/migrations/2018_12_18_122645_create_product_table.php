<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->tinyInteger('pricing');
            $table->tinyInteger('bidden');
            $table->tinyInteger('notk');
            $table->tinyInteger('free');
            $table->decimal('price',8,2);
            $table->integer('usersid')->unsigned();
            $table->foreign('usersid')->references('id')->on('users');
                
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
        Schema::drop('product');
    }
}
