<?php

use Illuminate\Database\Seeder;
use App\Ubicacion;
class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
          $ubicacion= new Ubicacion;
          $ubicacion->edificio  = "edificio".$i;
          $ubicacion->aula  = "aula".$i;
          $ubicacion->save();
      }
    }
}
