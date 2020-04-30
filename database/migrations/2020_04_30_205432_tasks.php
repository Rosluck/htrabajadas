<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_trx', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('name',255);
            $table->time('start');
            $table->time('end');
            $table->integer('type_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_trx', function (Blueprint $table) {
            //
            Schema::drop('task_trx');
        });
    }
}
