<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rvs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('date');

            $table->integer('patients_id')->unsigned();
            $table->integer('medecins_id')->unsigned();

            $table->foreign('patients_id')
            ->references('id')
            ->on('patients')
            ->onDelete('restrict')
            ->onUpdate('restrict');

            $table->foreign('medecins_id')
            ->references('id')
            ->on('medecins')
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
        Schema::dropIfExists('rvs');
    }
}
