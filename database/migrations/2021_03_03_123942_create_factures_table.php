<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('montant')->nullable();
            $table->integer('medecin_id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('factures', function(Blueprint $table) {
            $table->foreign('medecin_id')->references('id')->on('medecins')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
        });
        Schema::table('factures', function(Blueprint $table) {
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
        Schema::dropIfExists('factures');
    }
}
