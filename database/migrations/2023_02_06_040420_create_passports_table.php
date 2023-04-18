<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('nrc')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('passport')->nullable();
            $table->string('passport_date')->nullable();
            $table->string('local_agent_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('remark')->nullable();
            $table->text('join_date')->nullable();
            $table->text('place_of_passport')->nullable();
            $table->text('owic')->nullable();
            $table->text('owic_date')->nullable();
            $table->text('reject_status')->nullable();
            $table->text('reject_date')->nullable();
            $table->text('reject_reason')->nullable();
            $table->integer('agent_list_id')->nullable();
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
        Schema::dropIfExists('passports');
    }
}
