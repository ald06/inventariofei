<?php

use App\TiposHardware;
use Illuminate\Database\Seeder;

class tipoHardwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tiposhardware  = new TiposHardware;
        $tiposhardware->nomHardware = 'Laptop';
        $tiposhardware->save();

        $tiposhardware  = new TiposHardware;
        $tiposhardware->nomHardware = 'Impresora';
        $tiposhardware->save();

        $tiposhardware  = new TiposHardware;
        $tiposhardware->nomHardware = 'Proyecto';
        $tiposhardware->save();

        $tiposhardware  = new TiposHardware;
        $tiposhardware->nomHardware = 'PC';
        $tiposhardware->save();


    }
}
