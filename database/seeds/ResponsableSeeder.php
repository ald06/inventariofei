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
        $responsable= new Responsable;
        $responsable->matricula  = "matricula ";
        $responsable->nombre  = "jefe maestro";
        $responsable->rol  = "jefe de centro de computo";
        $responsable->save();

        for ($i=0; $i < 10; $i++) {
          $responsable= new Responsable;
          $responsable->matricula  = "matricula ".$i;
          $responsable->nombre  = "nombre completo".$i;
          $responsable->rol  = "rol".$i;
          $responsable->save();
      }
    }
}
