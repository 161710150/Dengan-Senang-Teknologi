<?php

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
    	\App\User::insert ([
		    [
		    	'id' =>	1,
		        'name' => 'Admin',
		        'email' => 'admin@gmail.com',
		        'password' => bcrypt('rahasia'),
		        'remember_token' => NULL,
		        'created_at' => \Carbon\Carbon::now(),
		        'updated_at' => \Carbon\Carbon::now()
		    ]
    	]);
    }
}
