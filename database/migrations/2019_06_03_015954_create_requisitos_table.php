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
            $table->integer('userin_id')->unsigned();
            $table->string('sacramento');
            $table->integer('cno');
            $table->integer('cnf');
            $table->integer('fca')->default('2');
            $table->integer('cbauo')->default('2');
            $table->integer('cbauf')->default('2');
            $table->integer('ccomo')->default('2');
            $table->integer('ccomf')->default('2');
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
