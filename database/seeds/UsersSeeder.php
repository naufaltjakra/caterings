<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    
    public function run()
    {
        // sample admin
				App\User::create([
				'name' => 'Administrator',
				'email' => 'admin@gmail.com',
				'password' => bcrypt('secret'),
				'role' => 'admin'
				]);

				// sample customer
				App\User::create([
				'name' => 'Hazel Lukman',
				'email' => 'hazel@gmail.com',
				'password' => bcrypt('secret'),
				'role' => 'customer'
				]);
    }
}
