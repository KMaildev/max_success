<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsV3ToPassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passports', function (Blueprint $table) {
            $table->text('son')->nullable();
            $table->text('son_age')->nullable();
            $table->text('daughter')->nullable();
            $table->text('daughter_age')->nullable();
            $table->text('address_line_one')->nullable();
            $table->text('phone_family')->nullable();
            $table->text('name_of_heir')->nullable();
            $table->text('relative')->nullable();
            $table->text('nrc_of_heir')->nullable();
            $table->text('passport_cost')->nullable();
            $table->text('car_charges')->nullable();
            $table->text('passport_register_status')->nullable();
            $table->text('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passports', function (Blueprint $table) {
            //
        });
    }
}
