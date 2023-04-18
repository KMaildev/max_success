<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabourManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labour_management', function (Blueprint $table) {
            $table->id();
            $table->integer('demand_id')->nullable();
            $table->integer('contract_id')->nullable();
            $table->integer('overseas_agencies_id')->nullable();

            $table->string('name');
            $table->string('father_name')->nullable();
            $table->string('nrc')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('passport')->nullable();
            $table->string('passport_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('remark')->nullable();
            $table->text('place_of_passport')->nullable();
            $table->text('owic')->nullable();
            $table->text('owic_date')->nullable();
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
        Schema::dropIfExists('labour_management');
    }
}
