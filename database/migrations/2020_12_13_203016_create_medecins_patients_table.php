<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinsPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins_patients', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('medecins_id')->unsigned();
                $table->integer('patients_id')->unsigned();
                $table->timestamps();
            });
            Schema::table('medecins_patients', function(Blueprint $table) {
                $table->foreign('medecins_id')->references('id')->on('medecins')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
            });
            Schema::table('medecins_patients', function(Blueprint $table) {
                $table->foreign('patients_id')->references('id')->on('patients')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecins_patients');
    }
}
