<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Package extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('package', function (Blueprint $table) {
        $table->increments('id');
        $table->string('topic', 255);
        $table->integer('photo_id')->nullable();
        $table->integer('post_id')->nullable();
        $table->integer('author_id')->nullable();
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
    }
}
