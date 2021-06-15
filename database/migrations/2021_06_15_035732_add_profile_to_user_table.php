<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfileToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('description')->nullable(); // teacher - mo ta- co the dung trog trang detail
            $table->text('note')->nullable(); //ghi chu
            $table->text('show_intro')->nullable(); // teacher -show intro home page
            $table->text('subject')->nullable();// day mon gi-teacher
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('note');
            $table->dropColumn('show_intro');
            $table->dropColumn('subject');
        });
    }
}
