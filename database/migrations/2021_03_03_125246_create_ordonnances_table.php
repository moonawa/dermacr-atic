<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonnancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicament')->nullable();
            $table->string('dosage')->nullable();
            $table->string('indication')->nullable();
            $table->string('renouveau')->nullable();
            $table->integer('consultations_id')->unsigned();
            $table->timestamps();

            $table->foreign('consultations_id')
            ->references('id')
            ->on('consultations')
            ->onDelete('restrict')
            ->onUpdate('restrict');
            
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordonnances');
    }
}
