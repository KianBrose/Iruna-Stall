<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('item_id');
            $table->string('category')->default('equipment');
            $table->string('owner_id');
            $table->string('name');
            $table->string('type');
            $table->integer('atk');
            $table->integer('def');
            $table->bigInteger('price');
            $table->integer('slots')->nullable();
            $table->string('slot1')->nullable();
            $table->string('slot2')->nullable();
            $table->string('ability')->nullable();
            $table->integer('ability_level')->nullable();
            $table->integer('refinement')->nullable();
            $table->string('routes');
            $table->string('contact');
            $table->timestamps();

            //$table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
}
