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
      for ($i=0; $i < 10; $i++) {
        $estatus= new Estatus;
        $estatus->tipoEstatus  = "estatus".$i;
        $estatus->save();
    }
  }
}
