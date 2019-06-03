<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userin_id');
            $table->string('sacramento');
            $table->integer('cno');
            $table->integer('cnf');
            $table->integer('fca');
            $table->integer('cbauo');
            $table->integer('cbauf');
            $table->integer('ccomo');
            $table->integer('ccomf');
            $table->integer('fcp');
            $table->integer('cpa');
            $table->timestamps();

            $table->foreign('userin_id')->references('id')->on('userins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisitos');
    }
}
