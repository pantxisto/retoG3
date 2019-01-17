<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('empresas')->truncate();
        //for ($i=0; $i < 50; $i++) {
		DB::table('empresas')->insert([
           'nomEmpresa' => 'Avant Group',
           'sector'  => 'TIC',
           'email'  => 'info@avangroup.com',
           'ubicacion'  => 'Zamudio (Bilbao)',
           'telefono'  => '(+34) 946567700',
           'link'  => 'www.avangroup.com',
           'fecAlta'  => date('Y-m-d H:m:s')
   		]);
    	//));

			DB::table('empresas')->insert([
           'nomEmpresa' => 'Cisco',
           'sector'  => 'TIC',
           'email'  => '',
           'ubicacion'  => 'Zamudio (Bilbao)',
           'telefono'  => '(+34) 944310200',
           'link'  => 'www.cisco.com',
           'fecAlta'  => date('Y-m-d H:m:s')
       ]);

			DB::table('empresas')->insert([
           'nomEmpresa' => 'Ibermaticap',
           'sector'  => 'TIC',
           'email'  => '',
           'ubicacion'  => 'Zamudio (Bilbao)',
           'telefono'  => '(+34) 946567700',
           'link'  => 'www.ibermatica.com',
           'fecAlta'  => date('Y-m-d H:m:s')
       ]);
    }
}
