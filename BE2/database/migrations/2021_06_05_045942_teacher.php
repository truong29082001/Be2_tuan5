<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->integer('teacher_id',11); 
            $table->string('teacher_name',55);
            $table->string('teacher_address',500);
            $table->string('teacher_phone',55);
            $table->string('teacher_email',55);
            $table->integer('classes_id');
            $table->integer('user_id');
            $table->integer('faculty_id');
            $table->integer('diary_id');
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
        Schema::dropIfExists('teachers');
    }
}
