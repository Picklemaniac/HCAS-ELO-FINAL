<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oefeningen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oefeningen', function (Blueprint $table) {
            $table->id('OefeningNummer');
            $table->integer('TrainingNummer');
            $table->string('Titel');
            $table->integer('DomeinNummer');
            $table->string('Auteur');
            $table->string('Tijd');
            $table->integer('DoelGroepNummer');
            $table->string('Doel');
            $table->string('Leerfase');
            $table->string('Organisatie');
            $table->string('BalBezit');
            $table->string('NietBalBezit');
            $table->string('Omschakelen');
            $table->string('OefeningMakkelijk');
            $table->string('OefeningMoeilijk');
            $table->string('Tips');
            $table->string('ImageLink');
            $table->string('VideoLink');
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
        //
    }
}
