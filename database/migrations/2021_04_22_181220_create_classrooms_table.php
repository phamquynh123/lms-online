<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('course_id');
            $table->integer('teacher_id')->comment('giao vien');
            $table->integer('assistance_id')->nullable()->comment('id trogiang');
            $table->integer('status')->comment('studying or finished');
            $table->dateTime('time_start');
            $table->string('description');
            $table->integer('zoom_id');
            $table->string('form_study')->comment('online or offliine');
            $table->integer('created_user');
            $table->integer('updated_user');
            $table->softDeletes();
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
        Schema::dropIfExists('classes');
    }
}
