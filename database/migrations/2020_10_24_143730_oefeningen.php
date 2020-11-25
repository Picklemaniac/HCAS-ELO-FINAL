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
            $table->text('Trainingonderdeel')->nullable();;
            $table->string('Auteur');
            $table->string('Tijd');
            $table->text('Doelgroep');
            $table->text('Spelfase')->nullable();;
            $table->text('Werkvorm')->nullable();;
            $table->text('Leerfase');
            $table->text('Organisatie')->nullable();
            $table->text('Moeilijkheidsgraad');
            $table->text('MoeilijkerMaken')->nullable();
            $table->text('MakkelijkerMaken')->nullable();
            $table->text('VoorkomendeFouten')->nullable();
            $table->text('Tips')->nullable();
            $table->text('Hulpmiddelen')->nullable();
            $table->text('Aandachtspunten')->nullable();
            $table->text('ImageLink')->nullable();
            $table->text('VideoLink')->nullable();
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
