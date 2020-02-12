<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAtkDefColumnToIrunaitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('irunaitem', function (Blueprint $table) {
            $table->text('atk')->nullable()->after('monsters');
            $table->text('def')->nullable()->after('monsters');
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
            $table->dropIfExists('atk');
            $table->dropIfExists('def');
        });
    }
}
