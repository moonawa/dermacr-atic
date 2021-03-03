<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('age')->nullable();
            $table->string('profession')->nullable(); 
            $table->boolean('etat')->default(false);
            $table->boolean('sexe')->nullable();
            $table->string('adresse')->nullable();
            $table->integer('users_id')->unsigned();
            $table->timestamps();

        });
       
     
        Schema::table('patients', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')
            ->on('users')
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
        Schema::dropIfExists('patients');
    }
}
