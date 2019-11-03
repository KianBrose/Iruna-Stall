<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_id');
            $table->string('owner_id');
            $table->string('name');
            $table->integer('quantity');
            $table->bigInteger('price');
            $table->string('routes');
            $table->string('contact');
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
        Schema::dropIfExists('relic');
    }
}
