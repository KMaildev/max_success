<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demands', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_name')->nullable();
            $table->text('countrie_id')->nullable();
            $table->text('overseas_agencie_id')->nullable();
            $table->text('male')->nullable();
            $table->text('female')->nullable();
            $table->text('demand_date')->nullable();
            $table->text('cabinet_date')->nullable();
            $table->text('issue_date')->nullable();
            $table->text('issue_number')->nullable();
            $table->text('demand_status')->nullable();
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
        Schema::dropIfExists('demands');
    }
}
