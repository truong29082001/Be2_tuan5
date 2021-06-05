<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Diary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diary', function (Blueprint $table) {
            $table->integer('diary_id',11);
            $table->integer('course_catalog_id', $autoIncrement=false);
            $table->integer('courses_id', $autoIncrement=false);
            $table->integer('teacher_id', $autoIncrement=false);
            $table->integer('trainer_id', $autoIncrement=false);
            $table->integer('student_id', $autoIncrement=false);
            $table->integer('diary_week_id', $autoIncrement=false);
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
        Schema::dropIfExists('diary');
    }
}
