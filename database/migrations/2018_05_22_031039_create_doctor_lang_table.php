<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->string('name');
            $table->string('photo');
            $table->text('description');
            $table->text('laboral');
            $table->text('chequeo');
            $table->text('reconocimientos');
            
            $table->string('phone');
            $table->string('speciality');
            $table->string('education');
            $table->string('days');
            $table->text('member');
            $table->text('url');
            
            $table->text('seo_title');
            $table->text('seo_keywords');
            $table->text('seo_description');
            $table->text('degree');

            $table->unique(['doctor_id','locale']);
            $table->foreign('doctor_id')->references('id')->on('doctor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_lang');
    }
}
