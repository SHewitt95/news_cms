<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Photo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('photo', function (Blueprint $table) {
        $table->increments('id');
        $table->string('caption', 255);
        $table->string('img_link');
        $table->integer('author_id');
        $table->timestamps();
        $table->integer('package_id')->nullable();
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
    }
}
