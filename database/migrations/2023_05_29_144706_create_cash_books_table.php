<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_books', function (Blueprint $table) {
            $table->id();
            $table->text('cash_book_date')->nullable();
            $table->text('entry_day')->nullable();
            $table->text('entry_month')->nullable();
            $table->text('entry_year')->nullable();
            $table->text('reference')->nullable();
            $table->text('description')->nullable();
            $table->text('income')->nullable();
            $table->text('expense')->nullable();
            $table->text('tax')->nullable();
            $table->text('chartof_account_id')->nullable();
            $table->text('bank_cash_id')->nullable();
            $table->text('user_id')->nullable();
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
        Schema::dropIfExists('cash_books');
    }
}
