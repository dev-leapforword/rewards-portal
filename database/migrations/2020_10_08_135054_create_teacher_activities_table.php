<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_activities', function (Blueprint $table) {
            $table->bigIncrements('re_ac_te_id');
            $table->string('re_ac_te_name');
            $table->date('re_ac_te_date');
            $table->bigInteger('re_ac_te_marks')->nullable();
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
        Schema::dropIfExists('teacher_activities');
    }
}
