<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewLaboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_labours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('demand_id')->nullable();
            $table->integer('interview_id')->nullable();
            $table->integer('passport_id')->nullable();
            $table->integer('agent_list_id')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('interview_labours');
    }
}
