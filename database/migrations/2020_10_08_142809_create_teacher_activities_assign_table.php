<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherActivitiesAssignTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_activities_assign', function (Blueprint $table) {
            $table->bigIncrements('re_ac_as_te_id');
            $table->bigInteger('re_ac_as_activity_te_id');
            $table->bigInteger('re_ac_as_te_batch');
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
        Schema::dropIfExists('teacher_activities_assign');
    }
}
