<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_id');
            $table->string('category')->default('ai');
            $table->string('owner_id');
            $table->string('name');
            $table->string('routes');
            $table->integer('quantity');
            $table->string('color');
            $table->bigInteger('price');
            $table->string('contact');
            $table->timestamps();

            //$table->foreign('owner_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ai');
    }
}
