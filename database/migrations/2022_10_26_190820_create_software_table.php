<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->string('version');
          $table->string('descripcion');
          $table->string('tipoSoftware');
          $table->string('licencia');
          $table->string('disponibilidad');
          $table->string('equiposPermitidos');
          $table->string('equiposOcupados');
          $table->timestamps();
          $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('software');
    }
}
