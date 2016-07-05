<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkToReservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function ($table) {
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->foreign('projector_id')->references('id')->on('projectors');
            $table->foreign('notebook_id')->references('id')->on('notebooks');
            $table->foreign('speaker_id')->references('id')->on('speakers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function ($table) {
            $table->dropForeign('reservations_teacher_id_foreign');
            $table->dropForeign('reservations_class_id_foreign');
            $table->dropForeign('reservations_classroom_id_foreign');
            $table->dropForeign('reservations_projector_id_foreign');
            $table->dropForeign('reservations_notebook_id_foreign');
            $table->dropForeign('reservations_speaker_id_foreign');
        });
    }
}
