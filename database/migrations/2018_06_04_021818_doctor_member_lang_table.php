<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorMemberLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_member_translation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_member_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->timestamps();

            $table->unique(['doctor_member_id','locale']);
            $table->foreign('doctor_member_id')->references('id')->on('doctor_member')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_member_translation');
    }
}
