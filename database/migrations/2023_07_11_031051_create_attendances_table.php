<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('attendance_date')->nullable();
            $table->text('on_duty')->nullable();
            $table->text('off_duty')->nullable();
            $table->text('clock_in')->nullable();
            $table->text('clock_out')->nullable();
            $table->text('late')->nullable();
            $table->text('early')->nullable();
            $table->text('absent')->nullable();
            $table->text('ot_time')->nullable();
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
        Schema::dropIfExists('attendances');
    }
}
