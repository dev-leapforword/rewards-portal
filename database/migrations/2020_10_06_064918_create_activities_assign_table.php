<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_assign', function (Blueprint $table) {
            $table->bigIncrements('re_ac_as_id');
            $table->bigInteger('re_ac_as_activity_id');
            $table->bigInteger('re_ac_as_batch');
            $table->bigInteger('re_ac_as_grade');
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
        Schema::dropIfExists('activities_assign');
    }
}
