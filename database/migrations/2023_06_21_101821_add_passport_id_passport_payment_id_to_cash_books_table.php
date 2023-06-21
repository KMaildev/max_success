<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPassportIdPassportPaymentIdToCashBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cash_books', function (Blueprint $table) {
            $table->text('passport_id')->nullable();
            $table->text('passport_payment_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cash_books', function (Blueprint $table) {
            //
        });
    }
}
