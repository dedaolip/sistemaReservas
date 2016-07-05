<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments  ('id')              ->unsigned();
            $table->integer     ('teacher_id')      ->unsigned();   //id do professor
            $table->integer     ('class_id');                       //id da turma
            $table->integer     ('classroom_id');                   //id da sala de aula
            $table->integer     ('projector_id')    ->nullable();   //id do projetor
            $table->integer     ('notebook_id')     ->nullable();   //id do notebook
            $table->integer     ('speaker_id')      ->nullable();   //id da caixa de som
            $table->date        ('date')            ->unsigned();   //data da reserva
            $table->string      ('period', 20)      ->unsigned();   //periodo da reserva
            $table->string      ('block', 20)       ->unsigned();   //bloco de aula da reserva
            $table->timestamps  ();

            //fk
            $table->foreign('teacher_id')   ->references('id')->on('teachers');
            $table->foreign('class_id')     ->references('id')->on('classes');
            $table->foreign('classroom_id') ->references('id')->on('classroms');
            $table->foreign('projector_id') ->references('id')->on('projectors');
            $table->foreign('notebook_id')  ->references('id')->on('notebooks');
            $table->foreign('speaker_id')   ->references('id')->on('speakers');
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

        Schema::drop('reservations');
    }
}
