<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hopital')->nullable();
            $table->string('code')->unique()->nullable();
            $table->boolean('admin')->default(false);
            $table->string('signature')->nullable();
            $table->integer('users_id')->unsigned();
            $table->integer('departements_id')->unsigned();

            $table->timestamps();
        });

        Schema::table('medecins', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')
            ->on('users')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
        Schema::table('medecins', function (Blueprint $table) {
            $table->foreign('departements_id')->references('id')
            ->on('departements')
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
        Schema::dropIfExists('medecins');
    }
}
