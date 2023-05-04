<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAgentFieldsToOverseasAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('overseas_agencies', function (Blueprint $table) {
            $table->text('agent_company_name')->nullable();
            $table->text('agent_contact_person')->nullable();
            $table->text('agent_phone')->nullable();
            $table->text('agent_email')->nullable();
            $table->text('agent_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('overseas_agencies', function (Blueprint $table) {
            //
        });
    }
}
