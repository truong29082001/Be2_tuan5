<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserHasGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    Schema::create('user_has_group', function (Blueprint $table) {
        $table->integer('group_id'); 
        $table->integer('user_id'); 
        $table->timestamps();
    });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     
        //
        Schema::dropIfExists('user_has_group');
    }
}
