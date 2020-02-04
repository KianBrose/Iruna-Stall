<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMonsterColumnToIrunaitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('irunaitem', function (Blueprint $table) {
            $table->text('monsters')->nullable();
            $table->boolean('production')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('irunaitem', function (Blueprint $table) {
            $table->dropIfExists('monsters');
            $table->dropIfExists('production');
        });
    }
}
