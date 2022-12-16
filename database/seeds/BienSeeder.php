<?php

use Illuminate\Database\Seeder;
use App\Bien;
class BienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bien = new Bien;
        $bien-> noserie  = "11111111";
        $bien->noinventario  = "111111111";
        $bien->responsable_id  = "1";
        $bien->ubicacion_id  = "1";
        $bien->estatus_id  = "1";
        $bien->tipoadquisicion_id  = "1";
        $bien->save();

        $bien = new Bien;
        $bien->noserie  = "222222222";
        $bien->noinventario  = "222222222";
        $bien->responsable_id  = "1";
        $bien->ubicacion_id  = "1";
        $bien->estatus_id  = "1";
        $bien->tipoadquisicion_id  = "1";
        $bien->save();

        $bien = new Bien;
        $bien->noserie  = "333333333";
        $bien->noinventario  = "33333333333";
        $bien->responsable_id  = "1";
        $bien->ubicacion_id  = "1";
        $bien->estatus_id  = "1";
        $bien->tipoadquisicion_id  = "1";
        $bien->save();

        $bien = new Bien;
        $bien->noserie  = "444444444";
        $bien->noinventario  = "444444444444";
        $bien->responsable_id  = "1";
        $bien->ubicacion_id  = "1";
        $bien->estatus_id  = "1";
        $bien->tipoadquisicion_id  = "1";
        $bien->save();

    }
}
