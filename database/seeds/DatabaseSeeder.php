<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(MenusSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
