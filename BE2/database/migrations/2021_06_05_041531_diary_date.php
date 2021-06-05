<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DiaryDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary_date', function (Blueprint $table) {
            $table->integer('diary_date_id',11);
            $table->date('date');
            $table->integer('diary_week_id',$autoIncrement=false);
            $table->longText('comment_trainer',255);
            $table->longText('comment_teacher',255);
            $table->string('job',255);
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
        Schema::dropIfExists('diary_date');
    }
}
