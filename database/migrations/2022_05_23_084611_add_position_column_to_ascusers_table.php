<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionColumnToAscusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ascusers', function (Blueprint $table) {
            //
        });
        
        Schema::table('ascusers', function (Blueprint $table) {
        $table->string('position', 10)->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ascusers', function (Blueprint $table) {
            //
        });
    }
}
