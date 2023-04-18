<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreFieldV1ToAgentListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agent_lists', function (Blueprint $table) {
            $table->text('agent_code')->nullable();
            $table->text('nrc')->nullable();
            $table->text('nrc_front')->nullable();
            $table->text('nrc_back')->nullable();
            $table->text('region_id')->nullable();
            $table->text('township_id')->nullable();
            $table->text('remark')->nullable();
            $table->text('add_user_id')->nullable();
            $table->text('join_date')->nullable();
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
