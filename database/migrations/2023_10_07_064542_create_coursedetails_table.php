<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursedetails', function (Blueprint $table) {
            $table->id();
            $table->string("course_id");
            $table->string("course_type");
            $table->string("session_id");
            $table->string("title");
            $table->string("descep");
            $table->string("incharge_email");
            $table->string("start_time");
            $table->string("end_time");
            $table->string("instuctor_email");
            $table->string("duration");
            $table->string("credit_hour");
            $table->string("cpe_hour");
            $table->string("contact_hour");
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
        Schema::dropIfExists('coursedetails');
    }
};
