<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_management', function (Blueprint $table) {
            $table->increments('id');
            $table->text('overseas_agencie_id')->nullable();
            $table->text('demand_id')->nullable();
            $table->text('contract_id')->nullable();
            $table->text('sending_id')->nullable();
            $table->text('user_id')->nullable();
            $table->text('file_name')->nullable();
            $table->text('file_path')->nullable();
            $table->text('upload_date')->nullable();
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
        Schema::dropIfExists('file_management');
    }
}
