<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsV2ToPassportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passports', function (Blueprint $table) {
            $table->text('labour_code')->nullable();
            $table->text('age')->nullable();
            $table->text('photo')->nullable();
            $table->text('nrc_front')->nullable();
            $table->text('nrc_back')->nullable();
            $table->text('passport_expiry_date')->nullable();
            $table->text('qualification')->nullable();
            $table->text('weight')->nullable();
            $table->text('height')->nullable();
            $table->text('tatto')->nullable();
            $table->text('smoking')->nullable();
            $table->text('alcohol')->nullable();
            $table->text('prominent_sign')->nullable();
            $table->text('working_experience')->nullable();
            $table->text('selected_country')->nullable();
            $table->text('labour_card_no')->nullable();
            $table->text('issue_of_labour_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passports', function (Blueprint $table) {
            //
        });
    }
}
