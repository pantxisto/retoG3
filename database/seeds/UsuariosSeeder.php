<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('usuarios')->truncate();
      
    	DB::table('usuarios')->insert([
           'nombre' => 'Grupo3',
           'apellidos'  => 'Pros',
           'email'  => 'grupo3@gmail.com',
           'password'  => '12345',
           'cv'  => '0',
           'idDepart'  => '1',
           'nomDepart'  => 'Informatica',
           'rol'  => '0',
           'feAlta'  => date('Y-m-d H:m:s')
   		]);

        DB::table('usuarios')->insert([
           'nombre' => 'Insaurti',
           'apellidos'  => 'No lo se',
           'email'  => 'insauti@fptxurdinaga.com',
           'password'  => '12345',
           'cv'  => '0',
           'idDepart'  => '1',
           'nomDepart'  => 'Informatica',
           'rol'  => '1',
           'feAlta'  => date('Y-m-d H:m:s')
   		]);

   		DB::table('usuarios')->insert([
           'nombre' => 'Arkaitz',
           'apellidos'  => 'No lo se',
           'email'  => 'arkaitz@gmail.com',
           'password'  => '12345',
           'cv'  => '1',
           'idDepart'  => null,
           'nomDepart'  => null,
           'rol'  => '2',
           'feAlta'  => date('Y-m-d H:m:s')
   		]);
    }
}
