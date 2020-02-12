<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHiddenEffectsColumnToIrunaitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('irunaitem', function (Blueprint $table) {
            $table->text('hiddenEffect')->nullable()->after('description');
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
            $table->dropIfExists('hiddenEffect');
        });
    }
}
