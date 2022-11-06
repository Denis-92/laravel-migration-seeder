<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Azienda
     * Stazione di partenza
     * Stazione di arrivo
     * Orario di partenza
     * Orario di arrivo
     * Codice Treno
     * Numero Carrozze
     * In orario
     * Cancellato
     *
     *
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 40);
            $table->string('stazione_partenza', 20);
            $table->string('stazione_arrivo', 20);
            $table->data('data_partenza');
            $table->time('orario_partenza');
            $table->data('data_arrivo');
            $table->time('orario_arrivo');
            $table->string('codice_treno', 15)->unique();
            $table->tinyInteger('numero_carrozze')->unsigned()->default(0);
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
}
