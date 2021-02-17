<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('admins')->insert([
        	'name'=>'Admin',
        	'email'=>'thelesson.souza@gmail.com',
        	'password'=>Hash::make('admin'),
            'tipo'=>'Administrador',


        	]);
    }
}
