<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('post', function (Blueprint $table) {
        $table->increments('id');
        $table->string('headline', 255);
        $table->integer('author_id')->default(0);
        $table->timestamps();
        $table->integer('package_id')->nullable();
        $table->string('body_text');
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
