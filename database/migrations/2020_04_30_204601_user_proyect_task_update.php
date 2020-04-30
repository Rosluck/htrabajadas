<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserProyectTaskUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyect_update', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->time('fixed_end');
            $table->integer('user_proyect_task');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyect_update', function (Blueprint $table) {
            //
            Schema::drop('proyect_update');
        });
    }
}
