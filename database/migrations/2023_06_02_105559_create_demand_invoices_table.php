<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demand_invoices', function (Blueprint $table) {
            $table->id();
            $table->text('submit_date')->nullable();
            $table->text('overseas_agencie_id')->nullable();
            $table->text('demand_id')->nullable();
            $table->text('amount')->nullable();
            $table->text('total_labour')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('demand_invoices');
    }
}
