<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideshowLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slideshow_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slideshow_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->string('subtitle');
            $table->string('photo');

            $table->unique(['slideshow_id','locale']);
            $table->foreign('slideshow_id')->references('id')->on('slideshow')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slideshow_translation');
    }
}
