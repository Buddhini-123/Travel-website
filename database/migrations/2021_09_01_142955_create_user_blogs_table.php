<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //create the table user_blogs in the database by giving fields
    public function up()
    {
        Schema::create('user_blogs', function (Blueprint $table) {
            $table->increments('id'); //id autoincrements from the table
            $table->string('name');
            $table->string('description');
            $table->mediumText('image')->nullable(); //can keep image field as empty
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
        Schema::dropIfExists('user_blogs');
    }
}
