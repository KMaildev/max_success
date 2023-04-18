<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalTestTempListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_test_temp_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->text('agent_name')->nullable();
            $table->text('name')->nullable();
            $table->text('passport')->nullable();
            $table->text('nrc')->nullable();
            $table->integer('passport_id')->nullable();
            $table->text('session_id')->nullable();
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
        Schema::dropIfExists('medical_test_temp_lists');
    }
}
