<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrimonioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrimonio', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('cert_orig_baut_act_legal')->default(0);
            $table->boolean('cert_confir_orig_act')->default(0);
            $table->boolean('copia_CI_vigente')->default(0);
            $table->boolean('copia_cert_nac_gest_actual')->default(0);
            $table->boolean('copia_cert_de_matrim_civil')->default(0);
            $table->boolean('pase_matri_orig_act')->default(0);
            $table->boolean('copia_testigos_novio_novia')->default(0);
            $table->boolean('copia_CI_vigente_padrinos')->default(0);
            $table->boolean('cert_orig_act_matrim_religioso_padrinos')->default(0);
            $table->string('name_novio');
            $table->string('name_novia');
            $table->date('fec_nac_novio');
            $table->date('fec_nac_novia');
            $table->string('CI_novio');
            $table->string('CI_novia');
            $table->string('name_del_testigo_novio');
            $table->string('name_la_testigo_novio');
            $table->string('CI_del_testigo_novio');
            $table->string('CI_la_testigo_novio');
            $table->string('name_del_testigo_novia');
            $table->string('name_la_testigo_novia');
            $table->string('CI_del_testigo_novia');
            $table->string('CI_la_testigo_novia');
            $table->string('name_padrino');
            $table->string('name_madrina');
            $table->string('CI_padrino');
            $table->string('CI_madrina');
            $table->string('direc_pase_matrim');
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
        Schema::dropIfExists('matrimonio');
    }
}
