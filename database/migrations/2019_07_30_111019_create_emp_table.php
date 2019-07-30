<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('address');
            $table->string('gender');
            $table->string('dob');
            $table->string('mobileno');
            $table->string('education');
            $table->string('bloodgrp');
            $table->string('emp_per_name');
            $table->string('emp_per_mob');
            $table->string('status');
            $table->string('roles');

            $table->string('acc_name');
            $table->string('acc_no');
            $table->string('bank_name');
            $table->string('branch');
            $table->string('ifsc_code');
            $table->string('join_date');
            $table->string('pan_no');
            $table->string('adhar_no');
            $table->string('upload_adhar');
            $table->string('upload_pan');
            $table->string('upload_resume');
            $table->string('designation');
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
        Schema::dropIfExists('emp');
    }
}
