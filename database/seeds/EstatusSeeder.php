<?php

use Illuminate\Database\Seeder;
use App\Estatus;


class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $estatus= new Estatus;
        $estatus->tipoEstatus  = "Disponible";
        $estatus->save();

        $estatus= new Estatus;
        $estatus->tipoEstatus  = "Mantenimiento";
        $estatus->save();

        $estatus= new Estatus;
        $estatus->tipoEstatus  = "Asignado";
        $estatus->save();

        $estatus= new Estatus;
        $estatus->tipoEstatus  = "Baja";
        $estatus->save();



  }
}
