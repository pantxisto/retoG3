<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //DB::table('usuarios')->truncate();

        // Borramos los datos de la tabla
        DB::table('users')->delete();

    	DB::table('users')->insert([
           'name' => 'Grupo3',
           'email'  => 'grupo3@gmail.com',
           'email_verified_at'  => 'grupo3@gmail.com',
           'password'  => '12345',
           'remember_token'  => '0hiug',
           'created_at'  => date('Y-m-d H:m:s'),
           'updated _at'  => date('Y-m-d H:m:s')
   		]);

        DB::table('users')->insert([
            'name' => 'Grupo4',
            'email'  => 'grupo4@gmail.com',
            'email_verified_at'  => 'grupo4@gmail.com',
            'password'  => '123456',
            'remember_token'  => 'tyutyu',
            'created_at'  => date('Y-m-d H:m:s'),
            'updated _at'  => date('Y-m-d H:m:s')
   		]);

   		DB::table('users')->insert([
            'name' => 'Grupo5',
            'email'  => 'grupo5@gmail.com',
            'email_verified_at'  => 'grupo5@gmail.com',
            'password'  => '1234567',
            'remember_token'  => 'dfgrt',
            'created_at'  => date('Y-m-d H:m:s'),
            'updated _at'  => date('Y-m-d H:m:s')
   		]);
    }
}
