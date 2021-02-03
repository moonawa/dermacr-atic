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
            $table->string('hopital');
            $table->string('code')->nullable();
            $table->integer('admins_id')->unsigned()->nullable();
            $table->integer('users_id')->unsigned();
            $table->string('status')->nullable();

            $table->timestamps();
        });
        Schema::table('medecins', function (Blueprint $table) {
            $table->foreign('admins_id')
            ->references('id')
            ->on('admins')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
        Schema::table('medecins', function (Blueprint $table) {
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
        Schema::dropIfExists('medecins');
    }
}
