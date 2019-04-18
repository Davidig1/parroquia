<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunion', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('cert_nac_o_c')->default(0);
            $table->boolean('cert_baut_o_c')->default(0);
            $table->boolean('copia_CI_tutor')->default(0);
            $table->boolean('copia_CI_padrinos')->default(0);
            $table->boolean('cert_de_baut_o_confir_o_matrim_religioso')->default(0);
            $table->boolean('certificado_de_nac_orig_y_copia')->default(0);
            $table->string('name');
            $table->date('fec_nac');
            $table->char('genero');
            $table->string('name_tutor');
            $table->string('CI_tutor');
            $table->string('name_padrino');
            $table->string('name_madrina');
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
        Schema::dropIfExists('comunion');
    }
}
