<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_student', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_khmer')->nullable();
            $table->string('name_tatin')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('relationship_id')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('nationality')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('commune_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->text('address')->nullable();

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
        Schema::dropIfExists('tbl_student');
    }
}
