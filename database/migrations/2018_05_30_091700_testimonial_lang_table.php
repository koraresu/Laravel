<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestimonialLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonial_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('testimonial_id')->unsigned();
            $table->string('locale')->index();

            $table->string('patient');
            $table->string('photo_before');
            $table->string('photo_after');
            $table->text('description');
            $table->string('surgery');

            $table->unique(['testimonial_id','locale']);
            $table->foreign('testimonial_id')->references('id')->on('testimonial')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonial_translation');
    }
}
