<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        // Borramos los datos de la tabla
        DB::table('users')->delete();

    	DB::table('users')->insert([
            'name' => 'Grupo3',
            'surname' => 'Grupo3Apellido',
            'email'  => 'grupo3@gmail.com',
            'email_verified_at'  => date('Y-m-d H:m:s'),
            'password'  => '1234567',
            'cv'  => null,
            'mime' => null,
            'size' => null,
            'idDepart'  => null,
            'rol'  => '1',
            'remember_token'  => 'dfgrt',
            'created_at'  => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
   		]);

        DB::table('users')->insert([
            'name' => 'Grupo4',
            'surname' => 'Grupo4Apellido',
            'email'  => 'grupo4@gmail.com',
            'email_verified_at'  => date('Y-m-d H:m:s'),
            'password'  => '1234567',
            'cv'  => null,
            'mime' => null,
            'size' => null,
            'idDepart'  => null,
            'rol'  => '1',
            'remember_token'  => 'dfgrt',
            'created_at'  => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
   		]);

   		DB::table('users')->insert([
            'name' => 'Grupo5',
            'surname' => 'Grupo5Apellido',
            'email'  => 'grupo5@gmail.com',
            'email_verified_at'  => date('Y-m-d H:m:s'),
            'password'  => '1234567',
            'cv'  => null,
            'mime' => null,
            'size' => null,
            'idDepart'  => null,
            'rol'  => '1',
            'remember_token'  => 'dfgrt',
            'created_at'  => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
           ]);
    }
}
