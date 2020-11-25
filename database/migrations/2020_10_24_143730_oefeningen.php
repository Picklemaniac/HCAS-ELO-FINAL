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
            $table->string('Titel');
            $table->string('Domein');
            $table->string('Sector');
            $table->string('Subsector')->nullable();
            $table->string('Trainingonderdeel')->nullable();;
            $table->string('Auteur');
            $table->string('Tijd');
            $table->string('Doelgroep');
            $table->string('Doel');
            $table->string('Spelfase')->nullable();;
            $table->string('Werkvorm')->nullable();;
            $table->string('Leerfase');
            $table->string('Organisatie')->nullable();
            $table->string('Moeilijkheidsgraad');
            $table->string('MoeilijkerMaken')->nullable();
            $table->string('MakkelijkerMaken')->nullable();
            $table->string('VoorkomendeFouten')->nullable();
            $table->string('Tips')->nullable();
            $table->string('Hulpmiddelen')->nullable();
            $table->string('Aandachtspunten')->nullable();
            $table->string('ImageLink')->nullable();
            $table->string('VideoLink')->nullable();
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
