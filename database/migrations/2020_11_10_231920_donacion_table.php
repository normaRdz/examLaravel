<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donacion', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idDonador');
            $table->foreign('idDonador')->references('id')->on('donador');
            $table->bigInteger('idBeneficiario');
            $table->float('cantidad');
            $table->string('fecha');
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
        Schema::dropIfExists('donacion');
    }
}
