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
            $table->string('Domein');
            $table->string('Sector')->nullable();
            $table->string('Subsector')->nullable();
            $table->string('Trainingonderdeel');
            $table->string('Auteur');
            $table->string('Tijd');
            $table->string('Doelgroep');
            $table->string('Doel');
            $table->string('Spelfase');
            $table->string('Werkvorm');
            $table->string('Leerfase');
            $table->string('Organisatie');
            $table->string('Moeilijkheidsgraad');
            $table->string('MoeilijkerMaken');
            $table->string('MakkelijkerMaken');
            $table->string('VoorkomendeFouten');
            $table->string('Tips');
            $table->string('Hulpmiddelen');
            $table->string('Aandachtspunten');
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
