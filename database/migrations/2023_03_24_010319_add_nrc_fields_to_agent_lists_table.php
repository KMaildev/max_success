<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNrcFieldsToAgentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_lists', function (Blueprint $table) {
            $table->text('nrc_code')->nullable();
            $table->text('nrc_name')->nullable();
            $table->text('nrc_type')->nullable();
            $table->text('nrc_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agent_lists', function (Blueprint $table) {
            //
        });
    }
}
