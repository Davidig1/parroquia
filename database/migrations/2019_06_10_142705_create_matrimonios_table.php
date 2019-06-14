<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimonios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreno');
            $table->string('nombrena');
            $table->string('appno');
            $table->string('appna');
            $table->string('apmno');
            $table->string('apmna');
            $table->string('cino')->unique();
            $table->string('cina')->unique();
            $table->date('fxno');
            $table->date('fxna');
            $table->string('emailno');
            $table->string('emailna');
            $table->integer('fcnno');
            $table->integer('fcnna');
            $table->integer('focino');
            $table->integer('focina');
            $table->integer('cconno');
            $table->integer('cconna');
            $table->integer('cbano');
            $table->integer('cbana');
            $table->integer('cmc');
            $table->integer('pm');
            $table->integer('tfcino');
            $table->integer('tfcina');
            $table->integer('pfcino');
            $table->integer('pfcina');
            $table->date('fxm');
            $table->timestamps();

            /* $table->foreign('novio_id')->references('id')->on('userins');
             $table->foreign('novia_id')->references('id')->on('userins');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matrimonios');
    }
}
