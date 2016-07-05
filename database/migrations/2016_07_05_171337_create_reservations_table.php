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
            $table->increments('id')->unsigned();
            $table->integer('teacher_id')->unsigned();//id do professor
            $table->integer('class_id');//id da turma
            $table->integer('classroom_id');//id da sala de aula
            $table->integer('projector_id')->nullable();//id do projetor
            $table->integer('notebook_id')->nullable();//id do notebook
            $table->integer('speaker_id')->nullable();//id da caixa de som
            $table->timestamps();

            //fk
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreign('classroom_id')->references('id')->on('classroms');
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
        Schema::drop('reservations');
    }
}
