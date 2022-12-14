<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user= new User;
       $user->name = 'Administrador';
       $user->email = 'admin@gmail.com';
       $user->rol = 'admin';
       $user->password = Hash::make('12345678');
       $user->save();

       $user= new User;
       $user->name = 'Academico';
       $user->email = 'aca@gmail.com';
       $user->rol = 'academico';
       $user->password = Hash::make('12345678');
       $user->save();
    }
}
