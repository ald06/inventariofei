<?php

use Illuminate\Database\Seeder;
use App\Responsable;
class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
          $responsable= new Responsable;
          $responsable->matricula  = "matricuala ".$i;
          $responsable->nombre  = "nombre completo".$i;
          $responsable->rol  = "rol".$i;
          $responsable->save();
      }
    }
}
