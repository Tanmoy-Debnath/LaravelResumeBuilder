<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('phone_number');
            $table->string('email');
            $table->text('client_image');
            $table->string('looking_for');
            $table->string('available_for');
            $table->string('expected_salary');
            $table->string('preferred_job');
            $table->string('preferred_district');
            $table->text('career_objective');
            $table->text('career_summary');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('maritial_status');
            $table->string('national_id');
            $table->string('religion');
            $table->string('g_exam');
            $table->string('g_major');
            $table->string('g_institute');
            $table->string('g_result');
            $table->string('g_year');
            $table->string('g_duration');
            $table->string('g_achivement');
            $table->string('h_exam');
            $table->string('h_major');
            $table->string('h_institute');
            $table->string('h_result');
            $table->string('h_year');
            $table->string('h_duration');
            $table->string('h_achivement');
            $table->string('s_exam');
            $table->string('s_major');
            $table->string('s_institute');
            $table->string('s_result');
            $table->string('s_year');
            $table->string('s_duration');
            $table->string('s_achivement');
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
        Schema::dropIfExists('resumes');
    }
}
