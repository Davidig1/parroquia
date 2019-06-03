<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userins', function (Blueprint $table) {
            $table->increments('cid');
            $table->string('id')->unique();
            $table->integer('estado')->default('1');
            $table->string('nombre');
            $table->string('app');
            $table->string('apm');
            $table->date('fxn');
            $table->integer('bau')->default('0');
            $table->integer('com')->default('0');
            $table->integer('con')->default('0');
            $table->integer('cat')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userins');
    }
}
