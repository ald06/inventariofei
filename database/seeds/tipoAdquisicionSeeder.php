<?php

use Illuminate\Database\Seeder;

use App\tiposAdquisicion;
class tipoAdquisicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $tiposadquisicion  = new tiposAdquisicion;
      $tiposadquisicion->nombre = 'Donacion';
      $tiposadquisicion->save();

      $tiposadquisicion  = new tiposAdquisicion;
      $tiposadquisicion->nombre = 'Compra';
      $tiposadquisicion->save();

      $tiposadquisicion  = new tiposAdquisicion;
      $tiposadquisicion->nombre = 'Licitacion';
      $tiposadquisicion->save();

    }
}
