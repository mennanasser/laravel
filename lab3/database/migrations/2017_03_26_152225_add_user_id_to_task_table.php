<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
           Schema::table('tasks', function($table) {
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users');
         });
    }

    
    public function down()
    {
        Schema::table('tasks', function($table) {
             $table->dropColumn('user_id');
        });
    }

}