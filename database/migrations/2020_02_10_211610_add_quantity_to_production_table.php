<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuantityToProductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production', function (Blueprint $table) {
            $table->integer('firstMaterialQuantity')->nullable();
            $table->integer('secondMaterialQuantity')->nullable();
            $table->integer('thirdMaterialQuantity')->nullable();
            $table->integer('fourthMaterialQuantity')->nullable();
            $table->integer('fifthMaterialQuantity')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production', function (Blueprint $table) {
            $table->dropIfExists('firstMaterialQuantity');
            $table->dropIfExists('secondMaterialQuantity');
            $table->dropIfExists('thirdMaterialQuantity');
            $table->dropIfExists('fourthMaterialQuantity');
            $table->dropIfExists('fifthMaterialQuantity');
        });
    }
}
