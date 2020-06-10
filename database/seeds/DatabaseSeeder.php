<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	$data = [
    		[
    			'role' => 'admin'
    		],
    		[
    			'role' => 'user'
    		] 
    	];

    	DB::table('roles')->insert($data);

    	$data = [
    		[
    			'country' => 'venezuela'
    		],
    		[
    			'country' => 'usa'
    		] 
    	];

    	DB::table('countrys')->insert($data);

    	$data = [
    		[
    			'state' => 'valencia',
    			'country_id' => '1'
    		],
    		[
    			'state' => 'zulia',
    			'country_id' => '1'
    		] 
    	];

    	DB::table('states')->insert($data);

    	$data = [
    		[
    			'name' => 'jonathan',
    			'email' => 'admin@hotmail.com',
    			'password' => bcrypt('123'),
    			'rol_id' => 1,
    			'country_id' => 1,
    			'state_id' => 1
    		],
    		[
    			'name' => 'maria',
    			'email' => 'maria@hotmail.com',
    			'password' => bcrypt('123'),
    			'rol_id' => 2,
    			'country_id' => 1,
    			'state_id' => 2
    		],    		
    		[
    			'name' => 'jose',
    			'email' => 'jose@hotmail.com',
    			'password' => bcrypt('123'),
    			'rol_id' => 2,
    			'country_id' => 2,
    			'state_id' => 1
    		]
    	];

    	DB::table('users')->insert($data);

    }
}
