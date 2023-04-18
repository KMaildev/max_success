<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOverseasAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overseas_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_name')->nullable();
            $table->text('type_of_company')->nullable();
            $table->text('company_phone')->nullable();
            $table->text('company_email')->nullable();
            $table->text('company_address')->nullable();
            $table->text('countrie_id')->nullable();
            $table->text('contact')->nullable();
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
        Schema::dropIfExists('overseas_agencies');
    }
}
