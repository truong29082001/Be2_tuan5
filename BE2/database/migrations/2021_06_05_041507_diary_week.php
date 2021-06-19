<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiaryWeek extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('diary_week', function (Blueprint $table) {
    $table->integer('diary_week_id',11);
    $table->integer('week');
    $table->date('firstday');
    $table->date('lastday');
    $table->integer('diary_id', $autoIncrement=false);
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
        Schema::dropIfExists('diary_week');
    }
}
