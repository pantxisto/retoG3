<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OfertasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('ofertas')->truncate();

        DB::table('ofertas')->insert([
           'idEmpresa' => '1',
           'tipoTrabajo'  => 'Programador Java',
           'sector'  => 'TIC',
           'ubicacion'  => 'Zamudio (Bilbao)',
           'minExpe'  => '0',
           'salario'  => '560',
           'fecSubido'  => date('Y-m-d H:m:s')
   		]);

   		DB::table('ofertas')->insert([
           'idEmpresa' => '2',
           'tipoTrabajo'  => 'Programador .NET',
           'sector'  => 'TIC',
           'ubicacion'  => 'Zamudio (Bilbao)',
           'minExpe'  => '1',
           'salario'  => '730',
           'fecSubido'  => date('Y-m-d H:m:s')
   		]);

   		DB::table('ofertas')->insert([
           'idEmpresa' => '3',
           'tipoTrabajo'  => 'Programador JS',
           'sector'  => 'TIC',
           'ubicacion'  => 'Zamudio (Bilbao)',
           'minExpe'  => '0',
           'salario'  => '500',
           'fecSubido'  => date('Y-m-d H:m:s')
   		]);

    }
}
