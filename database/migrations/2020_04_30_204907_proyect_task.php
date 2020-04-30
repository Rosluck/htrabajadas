<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProyectTask extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proyect_task', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->boolean('status');
            $table->integer('task_id');
            $table->integer('proyect_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyect_task', function (Blueprint $table) {
            //
            Schema::drop('proyect_task');
        });
    }
}
