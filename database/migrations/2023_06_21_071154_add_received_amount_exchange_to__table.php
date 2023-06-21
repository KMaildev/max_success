<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReceivedAmountExchangeToTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passport_payments', function (Blueprint $table) {
            $table->text('received_amount')->nullable();
            $table->text('exchange_rate')->nullable();
            $table->text('currency_format')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passport_payments', function (Blueprint $table) {
            //
        });
    }
}
