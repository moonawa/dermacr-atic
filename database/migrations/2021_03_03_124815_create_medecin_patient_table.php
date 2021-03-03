<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinPatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecin_patient', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('medecin_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->string('duree')->nullable();
            $table->string('antecedent')->nullable();
            $table->string('heredite')->nullable();
            $table->string('photo')->default('default.jpg')->nullable();
            $table->timestamps();
        });
        Schema::table('medecin_patient', function(Blueprint $table) {
            $table->foreign('medecin_id')->references('id')->on('medecins')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('medecin_patient', function(Blueprint $table) {
            $table->foreign('patient_id')->references('id')->on('patients')
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
        Schema::dropIfExists('medecin_patient');
    }
}
