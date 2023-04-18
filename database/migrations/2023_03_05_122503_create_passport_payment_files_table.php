<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassportPaymentFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passport_payment_files', function (Blueprint $table) {
            $table->increments('id');
            $table->text('deposit_file_name')->nullable();
            $table->text('deposit_file_path')->nullable();
            $table->integer('passport_payment_id')->nullable();
            $table->integer('passport_id')->nullable();
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
        Schema::dropIfExists('passport_payment_files');
    }
}
