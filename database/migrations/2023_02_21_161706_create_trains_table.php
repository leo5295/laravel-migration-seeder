<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Azienda', 20);
            $table->string('Stazione_di_partenza', 20);
            $table->string('Stazione_di_arrivo', 20);
            $table->string('Orario_di_partenza', 20);
            $table->string('Orario_di_arrivo', 20);
            $table->integer('Codice_Treno')->unsigned();
            $table->integer('Numero_Carrozze')->unsigned();
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
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
};
